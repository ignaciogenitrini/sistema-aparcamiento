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

Route::get('/', 'MainController@index')->name('index');

/*
Route::get('importe', function() {
    return view('sistema/salida/importe');
})->name('importe');
*/ 

Route::get('altaoficial', function() {
    return view('sistema/alta/oficial');
})->name('altaoficial');

Route::get('altaresidente', function() {
    return view('sistema/alta/residente');
})->name('altaresidente');

Route::resource('comienzames', 'ComienzaMesController')->only(['store']);

Route::resource('pagoresidentes', 'PagoResidente')->only(['create','store']);

Route::resource('systems', 'SystemController')->only(['index']);

Route::resource('noresidentes', 'NoResidenteController')->only(['create','store']);

Route::resource('residentes', 'ResidenteController')->only(['create','store']);

Route::resource('oficials', 'OficialController')->only(['create', 'store']);

Route::resource('salida', 'SalidaController')->only(['create', 'store','show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
