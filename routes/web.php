<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ServicesController;
use App\Http\Controllers\api\ReviewController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\api\PortfolioController;
use App\Http\Controllers\api\MasterController;

Route::get('/', function () {
    return view('main');
});

Route::get('/reviews', [IndexController::class, 'reviews']);
Route::get('/portfolio', [IndexController::class, 'portfolio']);
Route::get('/services', [IndexController::class, 'services']);
Route::get('/contacts', [IndexController::class, 'contacts']);
Route::get('/team', [IndexController::class, 'team']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/privacy-policy', [IndexController::class, 'privacy_policy']);

Route::get('/api/salons',[ServicesController::class,'salons']);
Route::get('/api/services',[ServicesController::class,'index']);
Route::get('/api/services/master', [ServicesController::class, 'masters']);
Route::post('/api/services/appointment', [ServicesController::class, 'store']);
Route::post('/api/check-availability', [ServicesController::class, 'checkAvailability']);
Route::get('/api/get-available-times', [ServicesController::class, 'getAvailableTimes']);
Route::post('/api/reviews', [ReviewController::class, 'index']);
Route::get('/api/main-reviews', [ReviewController::class, 'getMainPageReviews']);
Route::get('/api/page-reviews', [ReviewController::class, 'getReviews']);
Route::post('/api/portfolios', [PortfolioController::class, 'store']);
Route::get('/api/portfolios', [PortfolioController::class, 'getPortfolios']);
Route::get('/api/masters/{salonId}', [MasterController::class, 'getMastersBySalon']);
Route::get('/api/page/services',[ServicesController::class,'page_service']);



