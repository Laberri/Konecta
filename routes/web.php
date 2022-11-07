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
    Auth::routes();

Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/kcrm', [App\Http\Controllers\kcrmController::class, 'kcrm'])->name('kcrm');

Route::get('/', function (){
    return view('logout');
});

Route::get('/kcrm/kcrmExport', [KcrmController::class, 'exportEcxel']);