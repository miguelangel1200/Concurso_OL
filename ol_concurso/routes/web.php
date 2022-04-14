<?php

use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\JuradoController;
use App\Http\Controllers\ModalidadController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\InscripcionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth']], function(){
//     Route::group(['middleware' => 'administrador'], function(){
//         Route::resource('dash', UsuarioController::class);
//     });
// });

Route::group(['middleware' => ['auth']], function(){
    Route::resource('participantes', ParticipanteController::class);
    Route::resource('jurados', JuradoController::class);
    Route::resource('modalidades', ModalidadController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('dashboard', DashController::class);
    Route::resource('inscripciones', InscripcionController::class);
});


Auth::routes();
