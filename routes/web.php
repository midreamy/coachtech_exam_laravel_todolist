<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

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

Route::get('/', [TodolistController::class, 'index']);
Route::post('/todo/create', [TodolistController::class, 'create']);
Route::post('/todo/update', [TodolistController::class, 'update']);
Route::post('/todo/delete/{id}', [TodolistController::class, 'delete']);
