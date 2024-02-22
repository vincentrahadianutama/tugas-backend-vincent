<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/home', function () {
    return view('home');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD Film
//CREATE
//Form tambah Film
Route::get('/film/create',[FilmController::class, 'create']);
//kirim data ke database
Route::post('/film', [FilmController::class, 'store']);
//READ
//Menampilkan semua film di halaman utama
Route::get('/film', [FilmController::class, 'index']);
//Detail film berdasarkan id
Route::get('/film/{film_id}', [FilmController::class, 'show']);
//EDIT
//Form edit film
Route::get('/film/{film_id}/edit', [FilmController::class, 'edit']);
//Edit data ke database berdasarkan id
Route::put('/film/{film_id}', [FilmController::class, 'update']);
//DELETE
//DELETE berdasarkan id
Route::delete('/film/{film_id}', [FilmController::class, 'destroy']);
