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

Route::get('/', function () {return view('home');})->name('/');

Route::get('/home', function () {return view('home');})->name('home');

Route::get('/profile', function () {return view('profile');})->name('profile');

Route::get('/registration', function () {return view('registration');})->name('registration');

Route::get('/authorization', function () {return view('authorization');})->name('authorization');
