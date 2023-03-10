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

// Order routes
Route::get('/order', function () {
    return view('order');
});

Route::get('/all-order', function () {
    return view('all-order');
});

Route::get('/not-picked', function () {
    return view('not-picked');
});

Route::get('/qc-faild', function () {
    return view('qc-faild');
});

Route::get('/all-order-live', function () {
    return view('all-order-live');
});

Route::get('/all-order-delivered', function () {
    return view('all-order-delivered');
});

Route::get('/all-order-returned', function () {
    return view('all-order-returned');
});

Route::get('/all-order-lost-damaged', function () {
    return view('all-order-lost-damaged');
});

Route::get('/all-order-cancelled', function () {
    return view('all-order-cancelled');
});

Route::get('/all-order-error-shipment', function () {
    return view('all-order-error-shipment');
});

// order routes ends


Route::get('/orders-store-orders', function () {
    return view('orders-store-orders');
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
Route::get('/serviceable', function () {
    return view('serviceable');
});

// tool--

Route::get('/order', function () {
    return view('order');
});

Route::get('/orders-channel-orders', function () {
    return view('orders-channel-orders');
});

Route::get('/orders-already-fulfilled', function () {
    return view('orders-already-fulfilled');
});

Route::get('/orders-error-orders', function () {
    return view('orders-error-orders');
});

Route::get('/orders-uploads-orders', function () {
    return view('orders-uploads-orders');
});


// Wallets Route
Route::get('/wallet-overview', function () {
    return view('wallet-overview');
});

Route::get('/wallet-deduction-history', function () {
    return view('wallet-deduction-history');
});

Route::get('/wallet-transaction-history', function () {
    return view('wallet-transaction-history');
});

Route::get('/wallet-transaction-history', function () {
    return view('wallet-transaction-history');
});

// Wallets Route ends


Route::get('/all-channel-integrations', function () {
    return view('all-channel-integrations');
});

// Finance section routes
Route::get('/manage-billing-invoice', function () {
    return view('manage-billing-invoice');
});

Route::get('/manage-cod-remittance', function () {
    return view('manage-cod-remittance');
});




// Finance section route end


