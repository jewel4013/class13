<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authorController;
use App\Http\Controllers\bookController;


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

Route::get('/authors', [authorController::class, 'index']);
Route::get('/authors/create', [authorController::class, 'create']);
Route::post('/authors/create', [authorController::class, 'store']);


Route::get('/books', [bookController::class, 'index']);
Route::get('/books/create', [bookController::class, 'create']);
Route::post('/books/create', [bookController::class, 'store']);
Route::get('/books/{id}/edit', [bookController::class, 'edit']);
Route::patch('/books/{id}/edit', [bookController::class, 'update']);
