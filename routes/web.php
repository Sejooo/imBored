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

// Bored REST API routes:
// https://www.boredapi.com/documentation#endpoints-price-range
$boredURL = 'http://www.boredapi.com';



Route::get('/', function () {
    return view('index');
});
