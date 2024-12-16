<?php
// terminálban a php artisan serve helyett: php artisan serve --port=8001


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Controllers\UsersController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TransmissionController;
use App\Http\Controllers\CarController;

/*Route::post('/user/login', UsersController::class, 'login');
Route::get('/user', [UsersController::class, 'index'])->middleware('auth:sanctum');*/

// Fuels Routes
Route::get('fuels', [FuelController::class, 'index'])->name('fuels');
Route::delete('fuels/{id}', [FuelController::class, 'destroy']);//->middleware('auth:sanctum');
Route::patch('fuels/{id}', [FuelController::class, 'update']);//->middleware('auth:sanctum');
Route::post('fuels', [FuelController::class, 'store']);//->middleware('auth:sanctum');

// Bodies Routes
Route::get('bodies', [BodyController::class, 'index'])->name('bodies');
Route::delete('bodies/{id}', [BodyController::class, 'destroy']);//->middleware('auth:sanctum');
Route::patch('bodies/{id}', [BodyController::class, 'update']);//->middleware('auth:sanctum');
Route::post('bodies', [BodyController::class, 'store']);//->middleware('auth:sanctum');

// Colors Routes
Route::get('colors', [ColorController::class, 'index'])->name('colors');
Route::delete('colors/{id}', [ColorController::class, 'destroy']);//->middleware('auth:sanctum');
Route::patch('colors/{id}', [ColorController::class, 'update']);//->middleware('auth:sanctum');
Route::post('colors', [ColorController::class, 'store']);//->middleware('auth:sanctum');

// Transmissions Routes
Route::get('transmissions', [TransmissionController::class, 'index'])->name('transmissions');
Route::delete('transmissions/{id}', [TransmissionController::class, 'destroy']);//->middleware('auth:sanctum');
Route::patch('transmissions/{id}', [TransmissionController::class, 'update']);//->middleware('auth:sanctum');
Route::post('transmissions', [TransmissionController::class, 'store']);//->middleware('auth:sanctum');

// Models Routes
Route::get('models', [ModelController::class, 'index'])->name('models');
Route::delete('models/{id}', [ModelController::class, 'destroy']);//->middleware('auth:sanctum');
Route::patch('models/{id}', [ModelController::class, 'update']);//->middleware('auth:sanctum');
Route::post('models', [ModelController::class, 'store']);//->middleware('auth:sanctum');

// Makers Routes
Route::get('makers', [MakerController::class, 'index'])->name('makers');
Route::delete('makers/{id}', [MakerController::class, 'destroy']);//->middleware('auth:sanctum');
Route::get('makers/{id}/carmodels', [MakerController::class, 'models']);
Route::patch('makers/{id}', [MakerController::class, 'update']);//->middleware('auth:sanctum');
Route::post('makers', [MakerController::class, 'store']);//->middleware('auth:sanctum');

// Cars Routes
Route::get('cars', [CarController::class, 'index'])->name('cars');
Route::delete('cars/{id}', [CarController::class, 'destroy']);//->middleware('auth:sanctum');
Route::patch('cars/{id}', [CarController::class, 'update']);//->middleware('auth:sanctum');
Route::post('cars', [CarController::class, 'store'])->name('cars.create');//->middleware('auth:sanctum');
