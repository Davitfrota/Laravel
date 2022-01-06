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
Route::get('/events/create', [EventeController::class, 'create']);
Route::get('/events/{id}', [EventeController::class, 'show']);

Route::post('/events', [EventeController::class, 'store']);







Route::get('/contact', [ContactController::class, 'index']);

Route::get('/produtos', [ProductsController::class, 'search']);


Route::get('/produto/{id?}', [ProductIDController::class, 'index']);



