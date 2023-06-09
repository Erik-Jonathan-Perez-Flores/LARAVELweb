<?php

use Illuminate\Support\Facades\Route;

#añadir la ruta para usar el controlador
use App\Http\Controllers\regTourController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\indexController;



//Route::get('/',[regTourController::class,'index'])->name('inicio');
Route::get('/',[indexController::class,'inicio'])->name('inicio');
Route::get('/info',[indexController::class,'acercade'])->name('acercade');
Route::get('/servicios',[indexController::class,'servicios'])->name('servicios');
Route::resource('/buscar',indexController::class);
Route::get('/contactos',[indexController::class,'contactos'])->name('contactos');
Route::get('/tours',[indexController::class,'tours'])->name('tours');
Route::get('/detallestours/{id}',[indexController::class,'detallestours'])->name('detallestours');

Route::get('/verrec/{id}',[indexController::class,'verrecorrido'])->name('verrecorrido');

Route::get('/vercate',[categoriaController::class,'verCate'])->name('verCate');
Route::post('/guardarCate',[categoriaController::class,'guardarCate'])->name('guardarCate');
Route::get('/editarcate/{id}',[categoriaController::class,'editarcate'])->name('editarcate');
Route::put('/actualizarcate/{id}',[categoriaController::class,'actualizarcate'])->name('actualizarcate');
Route::get('/eliminarcate/{id}',[categoriaController::class,'eliminarcate'])->name('eliminarcate');

Route::get('/vertour',[regTourController::class,'vertour'])->name('vertour');
Route::get('/editartour/{id}',[regTourController::class,'editar'])->name('editartour');
Route::put('/actualizartour/{id}',[regTourController::class,'actualizarTour'])->name('actualizartour');
Route::get('/eliminartour/{id}',[regTourController::class,'eliminarTour'])->name('eliminartour');
Route::post('/registro', [regTourController::class,'guardarTour'])->name('registro');


Route::get('/reglogin',[loginController::class,'reglogin'])->name('reglogin');
Route::get('/inilogin',[loginController::class,'inilogin'])->name('inilogin');
Route::post('/createlogin',[loginController::class,'createlogin'])->name('createlogin');
Route::post('/valilogin',[loginController::class,'validar'])->name('valilogin');
Route::get('/cerrarsesion',[loginController::class,'cerrarsesion'])->name('cerrarsesion');


Route::get('/iniadmin',[adminController::class,'iniadmin'])->name('iniadmin');
Route::get('/reserva',[adminController::class,'reserva'])->name('reserva');
Route::post('/createreserva',[adminController::class,'createreserva'])->name('createreserva');
Route::get('/mostrarres/{id}',[adminController::class,'mreserva'])->name('mostrarres');
Route::get('/eliminarres/{id}',[adminController::class,'eliminarreser'])->name('eliminarres');
Route::put('/statusbaja/{id}',[adminController::class,'statusbaja'])->name('statusbaja');
Route::put('/statusalta/{id}',[adminController::class,'statusalta'])->name('statusalta');

Route::get('/video',[adminController::class,'vervideo'])->name('video');
Route::post('/crearvideo',[adminController::class,'crearvideo'])->name('crearvideo');
Route::get('/editarvideo/{id}',[adminController::class,'editarvideo'])->name('editarvideo');
Route::put('/actualizarvideo/{id}',[adminController::class,'actualizarvideo'])->name('actualizarvideo');
Route::get('/eliminarvideo/{id}',[adminController::class,'eliminarvideo'])->name('eliminarvideo');








