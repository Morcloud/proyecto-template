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

Route::get('/', 'InicioController@index');
//Route::get('admin/permiso', 'Admin\PermisoController@index')->name('permiso');

/* De este modo podemos ahorrar el 'admin' pero ya no se puede cachear */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
});


Route::get('/form', 'FormularioController@index');
Route::get('/original', 'FormularioController@original');