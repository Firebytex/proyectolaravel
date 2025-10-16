<?php

use App\Http\Controllers\FiestaController;
use App\Http\Controllers\HermandadController;
use App\Http\Controllers\HermandadControllerr;
use App\Http\Controllers\IntegranteController;

use App\Http\Controllers\ParticipanteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


//Ruta para admin que crea crud de fiestas
Route::resource('/admin/fiestas', FiestaController::class);

//ver participantes de una fiesta 
//pasamos por request id de la fiesta, y tambien indicamos el metodo participantes
Route::get('/admin/fiestas/{fiesta}/participantes',[FiestaController::class,'participantes'])
        ->name('fiestas.participantes');



//Rutas del usuario para ver fiestas y registrarse 
Route::get('/fiestas',[ParticipanteController::class,'index'])
        ->name('fiestas.lista');//en las plantillas se puede utilizar este alias para ir a una ruta especifica

//Rutas del usuario para ver la fiesta especifica
Route::get('/fiestas/{fiesta}',[ParticipanteController::class,'show'])
        ->name('fiestas.detalle');

//Registrase en una fieesta
//vamos a la ruta de una fiesta especifica par 
Route::post('fiestas/{fiesta}/registrar',[ParticipanteController::class,'store'])
        ->name('fiestas.registrarse');
        




