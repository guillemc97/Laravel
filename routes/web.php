<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscuelaController;

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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('escuela', [EscuelaController::class, 'index']);
Route::get('escuela/{id}', [EscuelaController::class, 'show']); 

Route::group(['middleware' => 'auth'], function () {
    Route::get('escuela/{id}/delete', [EscuelaController::class, 'destroy']);
});

Route::get('escuela/{id}/edit', [EscuelaController::class, 'edit']); 
Route::post('escuela/{id}/editar', [EscuelaController::class, 'update']);
//Route::get('escuela/crear', [EscuelaController::class, 'crear']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
