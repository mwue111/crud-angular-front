<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryRestController;


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
Route::get('/categories', [CategoryRestController::class, 'index']);
Route::post('/categories', [CategoryRestController::class, 'store']);
Route::put('/categories/{category}', [CategoryRestController::class, 'update']);
Route::delete('/categories/{category}', [CategoryRestController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
