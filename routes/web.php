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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/performance', function () {
    return view('performance');
});

Route::get('/order', function () {
    return view('order');
});

<<<<<<< HEAD
Route::get('/revenue', function () {
    return view('revenue');
=======
Route::get('/all-order', function () {
    return view('all-order');
>>>>>>> b0e9655bb6cfbde03ea80eec21defd2f0834a720
});
