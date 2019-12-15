<?php

Route::get('/', function () {
    return view('layout');
});

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


Route::get('/faq', "faqController@index")->name('faq');


Route::get('/contacto', "contactoController@index")->name('contacto');



// ADMIN

Route::get('admin/nueva_noticia', "adminController@create")->name('admin.nueva_noticia');

Route::post('admin/nueva_noticia', "noticiasController@store")->name('admin.nueva_noticia');

//Route::get('/admin', "adminController@index")->name('admin');

Route::get('/admin', "noticiasController@listado")->name('admin');

Route::post('/admin/destroy', "noticiasController@destroy")->name('admin.destroy');

//Route::get('/noticia/editar/{id}', "noticiasController@edit")->name('edit');

// Route::get('/init', function () {
//     Artisan::call('storage:link');
//     return 'ready!';
// });