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

Route::post('/user/store', 
	['as' => 'user.store', 
     'uses' => 'UserController@store']
);

Route::group(['middleware' => ['auth:api']], function () {

	//Usuario
	Route::resource('user', 'UserController',
					['only' => ['update', 'destroy', 'show']]);

	/*Route::resource('turnousuario', 'TurnoUsuarioController',
					['only' => ['index', 'show', 'destroy']]);
	Route::get('/turnousuario/getForDate/{date}/{idDia}/{idCancha}', 'TurnoUsuarioController@getForDate');
	Route::post('/turnousuario/store/{idTurnoAdmin}/{date}/{idUser}', 'TurnoUsuarioController@store');*/

});