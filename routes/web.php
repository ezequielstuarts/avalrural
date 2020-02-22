<?php

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', "indexController@index")->name('index');
Route::post('/', "indexController@index")->name('index');

Route::get('/sobre_aval', "sobreavalController@index")->name('quienes_somos');

Route::get('/productos', "productosController@cheques")->name('cheques');
Route::get('/cheques', "productosController@cheques")->name('cheques');
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

Route::post('enviar', "contactoController@enviar")->name('enviar');


Route::post('/precalificate-form', "precalificateController@store")->name('precalificate-form');


// ADMIN
Auth::routes();
Route::group(['middleware' => 'auth'], function ()
{

    Route::get('/admin', 'adminController@tablaDeNoticias')->name('admin');
    Route::get('/home', 'adminController@tablaDeNoticias')->name('home');

    Route::get('/admin/nueva_noticia', "adminController@create")->name('admin.nueva_noticia');

    Route::post('/admin/nueva_noticia', "adminController@store")->name('noticias.nueva_noticia');

    Route::post('/admin/destroy', "adminController@destroy")->name('noticia.destroy');

    Route::get('/admin/edit/{id}', "adminController@edit")->name('noticia.edit');

    Route::patch('/admin/update/{id}', "adminController@update");

    Route::get('/users', "usersController@index")->name('users');

});

//Route::get('/home', 'homeController@auth')->name('home'); esto esra antes
Route::get('/home', 'homeController@index')->name('home');


Route::get('/init', function () {
    Artisan::call('storage:link');
    return 'ready!';
});




