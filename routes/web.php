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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wikipedia', function () {
    return view('wikipedia');
});

Route::get('/youtube', function () {
    return view('youtube');
});

Route::get('/stack-over-flow', function () {
    return view('stack-over-flow');
});