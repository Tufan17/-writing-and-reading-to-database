<?php

use App\Http\Controllers\ArabaController;
use App\Http\Controllers\OgrenciController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ogrenci_add', function () {
    return view('ogrenci');
});
Route::resource('/araba', ArabaController::class);
Route::resource('/ogrenci', OgrenciController::class);

Route::post("/ogrenci_add",[OgrenciController::class,"store"])->name('ogrenci.add');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
