<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Salon;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\AppointmentService;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ServicesController extends Controller
{

    public function salons()
    {
        // Получаем все салоны из базы данных
        $salons = Salon::all();

        // Возвращаем данные в формате JSON
        return response()->json($salons);
    }

    public function index(Request $request) {
        $query = Service::query();

        // Проверяем, если передан салон
        if ($request->has('salon_id')) {
            $query->where('salon_id', $request->get('salon_id'));
        }

        // Можно добавить другие фильтры, например, для комнаты, если это необходимо
        if ($request->has('room')) {
            $query->where('room', $request->get('room'));
        }

        // Получаем список услуг
        $services = $query->get();

        // Возвращаем ответ в виде JSON
        return response()->json($services);
    }



    public function masters(Request $request)
    {
        $serviceId = $request->query('services');

        // Находим услугу по ID и загружаем соответствующих мастеров
        $service = Service::with('masters')->find($serviceId);

        if (!$service) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        // Извлекаем нужные поля для мастеров
        $mastersData = $service->masters->map(function ($master) {
            return [
                'id' => $master->id,
                'full_name' => $master->full_name,
                'specialization' => $master->specialization,
                'image_path' => $master->image_path, // Предполагаем, что у мастера есть поле для изображения
            ];
        });

        return response()->json($mastersData);
    }

    public function store(Request $request)
    {
        // Валидируем входящие данные
        $validated = $request->validate([
            'salon_id' => 'required|exists:salons,id',
            'client_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'comment' => 'nullable|string',
            'master_id' => 'required|exists:masters,id',
            'appointment_datetime' => 'required|date',
            'services' => 'required|array',
            'services.*' => 'exists:services,id',
        ]);

        // Преобразуем дату и время в формат, который ожидает база данных
        $appointmentDatetime = Carbon::parse($validated['appointment_datetime'])->format('Y-m-d H:i:s');

        // Создаем новую заявку
        $appointment = Appointment::create([
            'salon_id' => $validated['salon_id'],
            'client_name' => $validated['client_name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'comment' => $validated['comment'],
            'master_id' => $validated['master_id'],
            'appointment_datetime' => $appointmentDatetime,
        ]);

        // Логируем, что заявка была успешно создана

        // Создаем записи для каждой выбранной услуги
        foreach ($validated['services'] as $serviceId) {
            // Проверяем, существует ли услуга
            $service = Service::find($serviceId);

            if (!$service) {
                continue; // Пропускаем, если услуга не найдена
            }

            // Создаем запись в промежуточной таблице для каждой услуги
            AppointmentService::create([
                'appointment_id' => $appointment->id,
                'service_id' => $serviceId,  // Передаем ID услуги
            ]);
        }

        // Возвращаем успешный ответ
        return response()->json(['message' => 'Запись успешно создана!'], 200);
    }


    public function getAvailableTimes(Request $request)
    {
        // Получаем параметры из запроса
        $date = $request->query('date');
        $masterId = $request->query('master_id');

        // Проверяем, что дата и мастер заданы
        if (!$date || !$masterId) {
            return response()->json([
                'error' => 'Необходимо указать дату и ID мастера'
            ], 400); // 400 - неверный запрос
        }

        // Преобразуем строку в объект Carbon
        try {
            $date = Carbon::parse($date)->format('Y-m-d');
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Невалидная дата'
            ], 400);
        }

        // Получаем доступные записи для указанной даты и мастера
        $availableTimes = Appointment::query()
            ->whereDate('appointment_datetime', $date) // фильтрация по дате
            ->where('master_id', $masterId) // фильтрация по ID мастера
            ->get();

        return response()->json($availableTimes);
    }


    public function page_service()
    {
        // Получаем все категории услуг
        $categories = ServiceCategory::all();

        // Получаем услуги по категориям для парикмахерских услуг
        $hairServices = Service::where('room', 'Мужской зал')->orWhere('room', 'Женский зал')->get();

        // Получаем услуги для маникюра и косметологии (по аналогии)
        $nailServices = Service::where('room', 'Ногтевая студия')->get();
        $cosmetologyServices = Service::where('room', 'Женский зал')->get(); // Пример фильтрации по зале

        return view('services.index', compact('categories', 'hairServices', 'nailServices', 'cosmetologyServices'));
    }
    public function appointment_count(Request $request)
    {
        $validated = $request->validate([
            'tel' => 'required|string'
        ]);

        // Удаляем всё, кроме цифр
        $normalizedTel = preg_replace('/\D+/', '', $validated['tel']);

        // Предполагаем, что в БД номера хранятся в любом формате — тоже очищаем перед сравнением
        $appointments = Appointment::all()->filter(function ($appointment) use ($normalizedTel) {
            return preg_replace('/\D+/', '', $appointment->phone) === $normalizedTel;
        });

        return response()->json(['count' => $appointments->count()]);
    }

}


