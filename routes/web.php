<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegrationCcxtController;
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

Route::get(
    '/binance',
    [IntegrationCcxtController::class, 'binance']
)->name('binance');


Route::get(
    '/load_markets',
    [IntegrationCcxtController::class, 'load_markets']
)->name('load_markets');
