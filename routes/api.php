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

	//Entidades
    Route::resource('establecimiento', 'EstablecimientoController');
    Route::get('/establecimiento/getForUser/{idUser}', 'EstablecimientoController@getForUser');

    Route::resource('cancha', 'CanchaController');
    Route::get('/cancha/getForEstablecimiento/{idEstab}', 'CanchaController@getForEstablecimiento');

	Route::resource('turnoadmin', 'TurnoAdminController');
	Route::get('/turnoadmin/getForUser/{idUser}', 'TurnoAdminController@getForUser');
	Route::get('/turnoadmin/getForCancha/{idCancha}', 'TurnoAdminController@getForCancha');

	Route::resource('turnousuario', 'TurnoUsuarioController',
					['only' => ['index', 'show', 'destroy']]);
	Route::get('/turnousuario/getForDate/{date}/{idDia}/{idCancha}', 'TurnoUsuarioController@getForDate');
	Route::post('/turnousuario/store/{idTurnoAdmin}/{date}/{idUser}', 'TurnoUsuarioController@store');

	Route::resource('turnoespecial', 'TurnoEspecialController');

	Route::resource('califcancha', 'CalifCanchaController');

	Route::resource('dia', 'DiaController',
					['only' => ['index', 'show']]);

	Route::resource('superficie', 'SuperficieController',
					['only' => ['index', 'show']]);

	Route::resource('deporte', 'DeporteController',
					['only' => ['index', 'show']]);

	Route::resource('ciudad', 'CiudadController',
					['only' => ['index', 'show']]);

	Route::resource('provincia', 'ProvinciaController',
					['only' => ['index', 'show']]);
});