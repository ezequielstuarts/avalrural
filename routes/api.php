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

Route::post('/precalificacion', 'ApiController@show_precalificacion');
Route::post('/precalificacion/{id}', 'ApiController@show_precalificacion_byid');

Route::get('/noticias', 'ApiController@show_noticias');
Route::get('/noticias/{id}', 'ApiController@show_noticias_byid');

route::get('/mensajes', function() {
    return datatables()->eloquent(App\Mensaje::query())->toJson();
});
