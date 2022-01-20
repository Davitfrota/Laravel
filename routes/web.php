<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\EventeController;
use App\Http\Controllers\ProductIDController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;

Route::get('/', [EventeController::class, 'index']);
Route::get('/events/create', [EventeController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventeController::class, 'show'])->middleware('auth');
Route::post('/events', [EventeController::class, 'store'])->middleware('auth');

Route::get('/dashboard', [EventeController::class, 'dashboard'])->middleware('auth');
Route::delete('/events/{id}', [EventeController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventeController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventeController::class, 'update'])->middleware('auth');








