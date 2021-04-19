<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscuelaController;
use App\Http\Controllers\AlumnoController;

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
Route::get('escuela/show/{id}', [EscuelaController::class, 'show']); 

Route::get('alumno', [AlumnoController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('escuela/delete/{id}', [EscuelaController::class, 'destroy']);
    Route::get('alumno/delete/{id}', [AlumnoController::class, 'destroy']);
    
    Route::get('escuela/crear', [EscuelaController::class, 'create']);
    Route::post('escuela/crear', [EscuelaController::class, 'store']);

    Route::get('alumno/crear', [AlumnoController::class, 'create']);
    Route::post('alumno/crear', [AlumnoController::class, 'store']);
    
    Route::get('escuela/editar/{id}', [EscuelaController::class, 'edit']); 
    Route::post('escuela/editar/{id}', [EscuelaController::class, 'update']);

    Route::get('alumno/editar/{id}', [AlumnoController::class, 'edit']); 
    Route::post('alumno/editar/{id}', [AlumnoController::class, 'update']);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
