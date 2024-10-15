<?php
use App\Http\Controllers\Api\PlansController;
use App\Http\Controllers\Api\TestimonialsController;
use App\Http\Controllers\Api\EbookController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/plans', [PlansController::class, 'index']);
Route::get('/testimonials', [TestimonialsController::class, 'index']);
Route::get('/ebooks', [EbookController::class, 'index']);

