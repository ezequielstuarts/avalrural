<?php

Route::redirect('/', 'index');
Route::get('', "IndexController@index")->name('index');

Route::get('sobre_aval', function () {return view ("quienes_somos");});
Route::get('productos', function () {return view ("productos/cheques");});
Route::get('cheques', function () {return view ("productos/cheques");});
Route::get('pagares', function () {return view ("productos/pagares");});
Route::get('bancos', function () {return view ("productos/bancos");});
Route::get('obligaciones', function () {return view ("productos/obligaciones");});
Route::get('fideicomisos', function () {return view ("productos/fideicomisos");});
Route::get('garantias', function () {return view ("productos/garantias");});
Route::get('que-es-una-sgr', function () {return view ("que-es");});
Route::get('faq', function () {return view ("faq");});
Route::get('pertenecer', function () {return view ("pertenecer/pertenecer");});
Route::get('requisitos', function () {return view ("pertenecer/requisitos");});
Route::get('noticias', "NoticiasController@index")->name('noticias');
Route::get('noticias/{slug}', "NoticiasController@verNoticia")->name('ver.noticia');
Route::get('contacto', "ContactoController@index")->name('contacto');
Route::post('enviar_contacto', "ContactoController@enviar_contacto")->name('enviar_contacto');
Route::post('precalificacion', "PrecalificateController@store")->name('precalificacion');


// ADMIN
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::group(['middleware' => 'auth'], function ()
{

    Route::get('admin', 'AdminController@index')->name('admin');
    Route::get('home', 'AdminController@index')->name('home');
    Route::get('admin/noticias', 'NoticiasController@tablaDeNoticias')->name('admin.noticias');

    Route::get('admin/noticias/nueva_noticia', "NoticiasController@create")->name('admin.noticias.nueva_noticia');

    Route::post('admin/noticias/nueva_noticia', "NoticiasController@store")->name('admin.noticias.nueva_noticia');

    Route::post('admin/noticias/destroy', "NoticiasController@destroy")->name('admin.noticias.destroy');
    Route::post('admin/noticiasHide/destroy', "NoticiasHideController@destroy")->name('admin.noticiasHide.destroy');

    Route::get('admin/noticiasHide', "NoticiasHideController@index")->name('admin.noticiasHide');

    Route::post('admin/noticias/hide/{id}', "NoticiasController@hide");

    Route::post('admin/noticiasHide/visible/{id}', "NoticiasHideController@visible");

    Route::get('admin/noticias/edit/{id}', "NoticiasController@edit")->name('admin.noticias.edit');

    Route::patch('admin/noticias/update/{id}', "NoticiasController@update")->name('admin.noticias.update');;

    //MENSAJES
    Route::get('admin/mensajes', function () {return view ("email/mensajes");});

    Route::get('mensajes/getMensajes', "MensajesController@getMensajes");

    Route::post('mensajes/read/{id}', "MensajesController@read");

    Route::post('mensajes/responder/{id}', "MensajesController@responder");

    Route::post('mensajes/delete/{id}', "MensajesController@destroy");

    //PRECALIFICACIONES
    Route::get('admin/precalificaciones', "PrecalificateController@index")->name('admin.precalificaciones');

    Route::post('admin/precalificaciones/destroy/{id}', "PrecalificateController@destroy")->name('admin.precalificate.destroy');

    Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');

    Route::get('admin/users', "UserController@index")->name('admin.users');

    Route::post('admin/users', "UserController@index")->name('admin.users');

    Route::get('admin/nuevo_usuario', 'UserController@create')->name('admin.users.nuevo_usuario');

    Route::post('admin/user/destroy', "UserController@destroy")->name('admin.user.destroy');

    Route::post('admin/nuevo_usuario', 'UserController@store')->name('admin.nuevo_usuario');

    Route::get('admin/users/edit_user/{id}', 'UserController@edit')->name('admin.users.edit_user');

    Route::patch('admin/users/edit_user/{id}', "UserController@update")->name('admin.users.edit_user');

});

Route::get('/init', function () {
    Artisan::call('storage:link');
    return 'ready!';
});




