<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Salon;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function getMastersBySalon($salonId)
    {
        // Получаем мастеров по салону
        $masters = Master::where('salon_id', $salonId)->get();

        return response()->json($masters);
    }
    public function showTeam()
    {
        // Получаем все салоны
        $salons = Salon::all(); // Список всех салонов
        return view('team.index', compact('salons'));
    }

}
