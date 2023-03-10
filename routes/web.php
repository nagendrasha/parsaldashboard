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

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('index');
});

// dashboard  --

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/performance', function () {
    return view('performance');
});

Route::get('/revenue', function () {
    return view('revenue');
});

Route::get('/orderstatus', function () {
    return view('orderstatus');
});
// dashboard end --
// tool --
Route::get('/toolcalculator', function () {
    return view('toolcalculator');
});
// tool--


Route::get('/order', function () {
    return view('order');
});
