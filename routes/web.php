<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::view('/','home')->name('home');
Route::view('/quien-soy','actualizar')->name('quien-soy');
Route::view('/eliminar','eliminar')->name('eliminar');
Route::view('/contacto','contacto')->name('contacto');
//
Route::resource('/agregar', 'AgregarUsuarios')
->names('agregar')
->parameters(['agregar'=>'project']);
//
Route::post('contacto','FormularioContactoController@addDatos')->name('contactoform.addDatos');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
