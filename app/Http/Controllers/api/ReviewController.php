<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        // Валидация данных из запроса
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string',
        ]);

        // Создание нового отзыва в базе данных
        Review::create([
            'full_name' => $validated['full_name'],
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
            'status' => 'На рассмотрении',
        ]);

        // Ответ API
        return response()->json(['message' => 'Отзыв успешно отправлен!'], 200);
    }
    public function getMainPageReviews()
    {
        // Получаем 10 последних опубликованных отзывов
        $reviews = Review::where('status', 'Опубликован')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return response()->json($reviews);
    }
    public function getReviews(Request $request)
    {
        // Получаем параметры фильтрации и пагинации из запроса
        $status = $request->get('status', 'Опубликован'); // По умолчанию показываем только опубликованные
        $rating = $request->get('rating', null); // Рейтинг, если передан
        $page = $request->get('page', 1); // Номер страницы
        $perPage = $request->get('per_page', 8); // Количество отзывов на странице, по умолчанию 8

        $reviewsQuery = Review::where('status', $status);

        if ($rating !== null) {
            $reviewsQuery->where('rating', $rating);
        }


        $reviews = $reviewsQuery->orderBy('created_at', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);

        return response()->json($reviews);
    }

}
