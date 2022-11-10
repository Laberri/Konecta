<?php

use App\Http\Controllers\KcrmController;
use App\Models\Kcrm;
use Illuminate\Support\Facades\Auth;
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
    /** Autenticación */
    Auth::routes();

    /** Ruta Home/inicio */
Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('home');

    /** Ruta de la base de datos */
Route::get('/kcrm', [App\Http\Controllers\kcrmController::class, 'kcrm'])->name('kcrm');

    /** Ruta para el cierre de cesión */
Route::get('/', function (){
    return view('logout');
});

    /** Ruta para la exportación del contenido de la tabla en excel */
Route::get('/kcrm/kcrmExport', [KcrmController::class, 'exportEcxel']);


