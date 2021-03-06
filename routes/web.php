<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adios', function () {
        return view('adios');
 });

Route::get('/oaus', function () {
    return view('oaus');
});

Route::get('/ciao', function () {
        return view('ciao');
});

Route::get('/adeus', function () {
    return view('adeus');
});
