<?php

use Illuminate\Support\Facades\Route;

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

/* con estas rutas se llaman desde los ##.blades.php lo que haya ahi*/ 

Route::get('/home', action: [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('/involucrados/create', action: [App\Http\Controllers\UserController::class, 'create'])
->name('involucrados.create'); 

Route:: get('/proyectos/nuevop', action: [App\Http\Controllers\ProyectoController::class, 'nuevop'])
->name('proyectos.nuevop');

Route:: post('/proyectos', action: [App\Http\Controllers\ProyectoController::class, 'STORE'])
->name(name: 'proyectos.store');

Route:: get('/recursos/recursop', action: [App\Http\Controllers\RecursoController::class, 'recursop'])
->name(name: 'recursos.recursop');

Route:: get('/problemas/problemasp', action: [App\Http\Controllers\ProblemaController::class, 'problemasp'])
->name(name: 'problemas.problemasp');

Route:: get('/passwords/login', action: [App\Http\Controllers\LoginController::class, 'create'])
->name(name: 'login.index');

Route:: post('/passwords/login', action: [App\Http\Controllers\LoginController::class, 'store'])
->name(name: 'login.store');

Route:: get('/ayuda/ayudap', action: [App\Http\Controllers\AyudaController::class, 'ayudap'])
->name(name: 'ayuda.ayudap');

Route:: get('/finalizado/finalizadop', action: [App\Http\Controllers\FinalizadoController::class, 'finalizadop'])
->name(name: 'finalizado.finalizadop');

Route:: get('/enproceso/enprocesop', action: [App\Http\Controllers\EnprocesoController::class, 'enprocesop'])
->name(name: 'enproceso.enprocesop');
