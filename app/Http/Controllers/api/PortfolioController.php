<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function store(Request $request)
    {


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        Portfolio::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        return response()->json(['message' => 'Портфолио отправлено'], 201);
    }
    public function getPortfolios(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = $request->get('per_page', 9);

        $query = \App\Models\Portfolio::query();

        // Добавляем фильтрацию по статусу
        $query->where('status', 'Опубликован');

        $portfolios = $query->orderBy('created_at', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);

        return response()->json($portfolios);
    }



}
