<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quienes_somos', "sobreavalController@index")->name('quienes_somos');


Route::get('/productos', "productosController@index")->name('productos');


Route::get('/que_es_una_sgr', "queesController@index")->name('que_es_una_sgr');


Route::get('/pertenecer', "pertenecerController@index")->name('pertenecer');


Route::get('/noticias', "noticiasController@index")->name('noticias');


Route::get('/faq', "faqController@index")->name('faq');


Route::get('/contacto', "contactoController@index")->name('contacto');