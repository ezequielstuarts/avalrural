<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('/mensajes', 'ApiController@show_mensajes');
// Route::post('/mensajes/{id}', 'ApiController@show_mensajes_byid');

// Route::post('/precalificaciones', 'ApiController@show_precalificacion');
// Route::post('/precalificaciones/{id}', 'ApiController@show_precalificacion_byid');

Route::get('/getNoticias', 'ApiController@getNoticias');
Route::get('/getNoticia/{id}', 'ApiController@getNoticia');

route::get('/mensajes', function() {
    return datatables()->eloquent(App\Mensaje::query())->toJson();
});
route::get('/precalificaciones', function() {
    return datatables()->eloquent(App\ContactPrecalificate::query())->toJson();
});
