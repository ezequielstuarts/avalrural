<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre_aval', "sobreavalController@index")->name('sobre_aval');


Route::get('/productos', "productosController@index")->name('productos');


Route::get('/que_es_una_sgr', "queesController@index")->name('que_es_una_sgr');


Route::get('/pertenecer', "pertenecerController@index")->name('pertenecer');


Route::get('/noticias', "noticiasController@index")->name('noticias');


Route::get('/faq', "faqController@index")->name('faq');


Route::get('/contacto', "contactoController@index")->name('contacto');