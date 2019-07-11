<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('inventarios','inventariosController');

Route::resource('Productos','ProductosController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
