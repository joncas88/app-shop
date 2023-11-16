<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\TestController@welcome')->name('welcome');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/prueba', function () {
    return 'hola soy una ruta prueba';
});

Auth::routes();

//Tenemos una Ruta llamado Home, que es resuelta por un controller que se llama HomeControler (fichero HomeController.php) a través del Método de nombre Index y devolviendo una Vista que se llama Home (fichero home.blade.php)

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

