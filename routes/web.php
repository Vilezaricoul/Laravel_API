<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/


Route::view('/Products', 'order');

Route::post('/Products', function (\Illuminate\Http\Request $request, \App\Helpers\Telegram $telegram) {
    $telegram->sendMessage(env('REPORT_TELEGRAM_ID'), $request->Message);
 
    return true;
});