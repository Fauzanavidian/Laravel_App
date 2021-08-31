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
    return view('main');
});

Route::get('/research', function () {
    return view('main');
});

Route::get('/activities', function () {
    return view('main');
});

Route::get('/member', function () {
    return view('main');
});

Route::get('/join', function () {
    return view('main');
});

