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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/overview', function () {
    return view('overview');
});

Route::get('/member', function () {
    return view('member');
});


Route::get('/curriculum', function () {
    return view('curriculum');
});


Route::get('/showcase', function () {
    return view('showcase');
});


Route::get('/gallery', function () {
    return view('gallery');
});