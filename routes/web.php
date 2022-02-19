<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\Controller;

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
    return view('welcome');
});

Route::get('/Agenda', [AgendaController::class, 'getAgenda']);
Route::get('/tambah', [Controller::class, 'tambah']);
Route::get('/edit/{id}', [AgendaController::class, 'getIdAgenda']);
Route::post('/post', [AgendaController::class, 'postAgenda']);
Route::put('/editAgenda/{id}', [AgendaController::class, 'editAgenda']);
Route::delete('/deleteAgenda/{id}', [AgendaController::class, 'deleteAgenda']);