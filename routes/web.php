<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('prueba');
});
*/
Route::get('usuarioAdmin', function () {
    return view('pagUsuario');
})->name('userAdmin');

Route::get('/', function () {
    return view('login');
});

Route::get('administrador', function () {
    return view('Admin.administrador');
});

Route::get('userAdmin', function () {
    return view('adminPage.index');
})->name('userAdminPage');

Route::get('user', function () {
    return view('usuario.index');
})->name('user');

Route::get('elem', function () {
    return view('elemento.index');
})->name('elem');

Route::get('visi', function () {
    return view('visitante.index');
})->name('visi');





Route::Resource('usuarios', 'UsuarioController');

Route::Resource('elementos', 'ElementoController');

//Route::Resource('vehiculos', 'VehiculoController');

Route::Resource('visitantes', 'VisitanteController');

Route::Resource('novedades', 'NovedadController');

Route::Resource('ingresos', 'IngresoController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


