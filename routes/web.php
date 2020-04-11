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

Route::get('noticias/{slug}', "noticiasController@verNoticia")->name('ver.noticia');

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

    Route::get('admin', 'NoticiasController@tablaDeNoticias')->name('admin');
    Route::get('panel', 'AdminController@index')->name('panel');
    Route::get('home', 'NoticiasController@tablaDeNoticias')->name('home');

    Route::get('admin/noticias/nueva_noticia', "NoticiasController@create")->name('admin.noticias.nueva_noticia');

    Route::post('admin/noticias/nueva_noticia', "NoticiasController@store")->name('admin.noticias.nueva_noticia');

    Route::post('admin/noticias/destroy', "NoticiasController@destroy")->name('admin.noticias.destroy');
    Route::post('admin/noticiasHide/destroy', "NoticiasHideController@destroy")->name('admin.noticiasHide.destroy');
    
    Route::get('admin/noticiasHide', "NoticiasHideController@index")->name('admin.noticiasHide');
    
    Route::post('admin/noticias/hide/{id}', "NoticiasController@hide");
    
    Route::post('admin/noticiasHide/visible/{id}', "NoticiasHideController@visible");

    Route::get('admin/noticias/edit/{slug}', "NoticiasController@edit")->name('admin.noticias.edit');

    Route::patch('admin/noticias/update/{id}', "NoticiasController@update")->name('admin.noticias.update');;

    Route::get('admin/mensajes', "MensajesController@index")->name('admin.mensajes');

    Route::get('admin/precalificaciones', "PrecalificateController@index")->name('admin.precalificaciones');

    Route::post('admin/mensajes/destroy/{id}', "MensajesController@destroy")->name('admin.mensajes.destroy');
    
    Route::post('admin/precalificaciones/destroy/{id}', "PrecalificateController@destroy")->name('admin.precalificate.destroy');

    Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');

    Route::get('admin/users', "UserController@index")->name('admin.users');

    Route::post('admin/users', "UserController@index")->name('admin.users');

    Route::get('admin/nuevo_usuario', 'UserController@create')->name('admin.users.nuevo_usuario');

    Route::post('admin/user/destroy', "UserController@destroy")->name('admin.user.destroy');

    Route::post('admin/nuevo_usuario', 'UserController@store')->name('admin.nuevo_usuario');

    Route::get('admin/users/edit_user/{id}', 'UserController@edit')->name('admin.users.edit_user');

    Route::patch('admin/users/edit_user/{id}', "UserController@update")->name('admin.users.edit_user');
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




