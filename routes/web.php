<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('organizacions-search', 'OrganizacionController@search');

Route::group(['middleware' => 'auth'], function () {

    AdvancedRoute::controller('/organizacion','OrganizacionController');
    AdvancedRoute::controller('/procesoRecursos','ProcesoRecursoController');
    AdvancedRoute::controller('/indicadors','IndicadorController');
    AdvancedRoute::controller('/actividades','ActividadController');

    Route::resource('organizacions', 'OrganizacionController');
    Route::resource('roles', 'RoleController');
    Route::resource('usuarios', 'UsuarioController');
    Route::resource('destinos', 'DestinoController');
    Route::resource('frecuencias', 'FrecuenciaController');
    Route::resource('proveedors', 'ProveedorController');
    Route::resource('recursos', 'RecursoController');
    Route::resource('responsables', 'ResponsableController');
    Route::resource('tipoIndicadors', 'TipoIndicadorController');
    Route::resource('objetivos', 'ObjetivosController');
    Route::resource('procesos', 'ProcesosController');
    Route::resource('procesoRecursos', 'ProcesoRecursoController');
    Route::resource('indicadors', 'IndicadorController');
    Route::resource('actividads', 'ActividadController');
});