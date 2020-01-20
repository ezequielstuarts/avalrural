<?php

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', "indexController@index")->name('index');

Route::get('/sobre_aval', "sobreavalController@index")->name('quienes_somos');

Route::get('/productos', "productosController@index")->name('cheques');
Route::get('/cheques', "productosController@index")->name('productos');
Route::get('/pagares', "productosController@pagares")->name('pagares');
Route::get('/bancos', "productosController@bancos")->name('bancos');
Route::get('/obligaciones', "productosController@obligaciones")->name('obligaciones');
Route::get('/fideicomisos', "productosController@fideicomisos")->name('fideicomisos');
Route::get('/garantias', "productosController@garantias")->name('garantias');


Route::get('/que_es_una_sgr', "queesController@index")->name('que_es_una_sgr');


Route::get('/pertenecer', "pertenecerController@requisitos")->name('pertenecer');
Route::get('/requisitos', "pertenecerController@requisitos")->name('requisitos');
Route::get('/como_obtener', "pertenecerController@como_obtener")->name('como_obtener');

Route::get('/noticias', "noticiasController@index")->name('noticias');

Route::get('/noticias/{id}', "noticiasController@verNoticia")->name('ver.noticia.{id}');

Route::get('/faq', "faqController@index")->name('faq');

Route::get('/contacto', "contactoController@index")->name('contacto');




// ADMIN
Auth::routes();
Route::group(['middleware' => 'auth'], function ()
{

    Route::get('/admin', 'noticiasController@tablaDeNoticias')->name('admin');

    Route::get('/admin/nueva_noticia', "noticiasController@create")->name('admin.nueva_noticia');

    Route::post('/admin/nueva_noticia', "noticiasController@store")->name('noticias.nueva_noticia');

    Route::post('/admin/destroy', "noticiasController@destroy")->name('noticias.destroy');

    Route::get('/admin/edit/{id}', "noticiasController@edit")->name('noticias.edit');

    Route::patch('/admin/update/{id}', "noticiasController@update");
});

Route::get('/home', 'homeController@auth')->name('home');



//Route::get('/noticia/editar/{id}', "noticiasController@edit")->name('edit');

Route::get('/init', function () {
    Artisan::call('storage:link');
    return 'ready!';
});


