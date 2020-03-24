<?php

// Route::get('/', function () {
//     return view('home');
// });

Route::get('', "indexController@index")->name('index');

Route::get('sobre_aval', "sobreavalController@index")->name('quienes_somos');

Route::get('productos', "productosController@cheques")->name('cheques');
Route::get('cheques', "productosController@cheques")->name('cheques');
Route::get('pagares', "productosController@pagares")->name('pagares');
Route::get('bancos', "productosController@bancos")->name('bancos');
Route::get('obligaciones', "productosController@obligaciones")->name('obligaciones');
Route::get('fideicomisos', "productosController@fideicomisos")->name('fideicomisos');
Route::get('garantias', "productosController@garantias")->name('garantias');


Route::get('que_es_una_sgr', "queesController@index")->name('que_es_una_sgr');


Route::get('pertenecer', "pertenecerController@requisitos")->name('pertenecer');
Route::get('requisitos', "pertenecerController@requisitos")->name('requisitos');
Route::get('como_obtener', "pertenecerController@como_obtener")->name('como_obtener');

Route::get('noticias', "noticiasController@index")->name('noticias');

Route::get('noticias/{id}', "noticiasController@verNoticia")->name('ver.noticia.{id}');

Route::get('faq', "faqController@index")->name('faq');

Route::get('contacto', "contactoController@index")->name('contacto');

Route::post('enviar_contacto', "contactoController@enviar_contacto")->name('enviar_contacto');

Route::post('precalificacion', "contactoController@precalificacion")->name('precalificacion');


// ADMIN
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::group(['middleware' => 'auth'], function ()
{

    Route::get('admin', 'adminController@tablaDeNoticias')->name('admin');
    Route::get('home', 'adminController@tablaDeNoticias')->name('home');

    Route::get('admin/nueva_noticia', "adminController@create")->name('admin.nueva_noticia');

    Route::post('admin/nueva_noticia', "adminController@store")->name('noticias.nueva_noticia');

    Route::post('admin/destroy', "adminController@destroy")->name('noticia.destroy');

    Route::get('admin/edit/{id}', "adminController@edit")->name('noticia.edit');

    Route::patch('admin/update/{id}', "adminController@update");

    Route::get('mensajes', "MensajesController@index")->name('admin.mensajes');

    Route::get('precalificaciones', "MensajesController@precalificaciones")->name('admin.precalificaciones');

    Route::post('mensajes/destroy', "MensajesController@destroy_mensaje")->name('admin.mensajes.destroy');
    Route::post('mensajes/destroy_precalificate', "MensajesController@destroy_precalificate")->name('admin.mensajes.destroy_precalificate');

    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

    Route::get('users', "usersController@index")->name('users');

    Route::post('users', "usersController@index")->name('users');

    Route::get('nuevo_usuario', 'UsersController@create')->name('users.nuevo_usuario');

    Route::post('destroy', "usersController@destroy")->name('user.destroy');

    Route::post('nuevo_usuario', 'UsersController@store')->name('nuevo_usuario');

    Route::get('users/edit_user/{id}', 'UsersController@edit')->name('users.edit_user');

    Route::patch('users/edit_user/{id}', "UsersController@update")->name('users.edit_user');
    //ok
    // Route::post('register', 'Auth\RegisterController@register');
    // Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
});

//Route::get('/home', 'homeController@auth')->name('home'); esto esra antes
// Route::get('/home', 'homeController@index')->name('home');
// Route::get('/home', 'adminController@tablaDeNoticias')->name('home');


Route::get('/init', function () {
    Artisan::call('storage:link');
    return 'ready!';
});




