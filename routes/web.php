<?php


use App\Http\Controllers\docente\CrearJuegoController;
use App\Http\Controllers\docente\ConfigurarJuegoController;
use App\Http\Controllers\docente\RankingController;
use App\Http\Controllers\estudiante\ResultadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\comite\PreguntaController;
use App\Http\Controllers\comite\RespuestaController;

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

//Ruta página principal
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/guia', function () {
    return view('landing.como_jugar');
})->name('guia');

Route::get('/informacion', function () {
    return view('landing.mas_info');
})->name('info');


Route::get('/redirects',[HomeController::class,"index"]);


Route::controller(RegistroController::class)->group(function(){
    #Route::get('/tipo_cuenta','first_step_register')->name('tipo_cuenta');
    
    Route::any('/tipo_cuenta','formulario_usuario')->name('tipo_cuenta');
});


Route::controller(ConfigurarJuegoController::class)->group(function(){

    Route::get('/configuracion','configurar_juego');
    Route::post('/banco_preguntas','seleccionar_preguntas')->name('banco_preguntas'); 
    Route::post('/inciar_juego','inciar_juego')->name('inciar_juego');       
});



Route::post('/juego', [CrearJuegoController::class, 'crear_juego'])->name('crear_juego');
Route::post('/ranking', [RankingController::class, 'create_ranking'])->name('create_ranking');

Route::post('/estado_juego', [ResultadoController::class, 'estado_partida'])->name('estado_juego');

Route::any('/resultado',[ResultadoController::class,'resultado_juego'])->name('resultado');

Route::any('/calcular_puntaje',[ResultadoController::class,'calcular_puntaje'])->name('calcular_puntaje');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/listado', [PreguntaController::class,'index'])->name('preguntas.listado');
Route::get('/nuevo', [PreguntaController::class,'create']);
Route::post('/nuevo', [PreguntaController::class,'store'])->name('nuevo.store');
Route::delete('/{id_pregunta}/nuevo', [PreguntaController::class,'destroy'])->name('nuevo.destroy');
Route::post('/{pregunta}/edit', [PreguntaController::class,'edit'])->name('nuevo.edit');
Route::put('/update', [PreguntaController::class,'update'])->name('nuevo.update');


Route::get('/respuesta',[RespuestaController::class,'create'])->name('preguntas.create');
Route::post('/respuesta',[RespuestaController::class,'store'])->name('pregunta.store');
