<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\controllers\controller_Juegos_Mesa;

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
    return view('index');
})->name('index');

Route::get('/api_juegos', function () {
    return view('api_juegos');
})->name('api_juegos');

Route::get('/api_gatos', function () {
    return view('api_gatos');
})->name('api_gatos');