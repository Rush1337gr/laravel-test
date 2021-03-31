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

Route::get('/profile/edit', function () {return view('edit');})->name('edit');

Route::get('/profile/logout',function () {Auth::logout();return redirect('authorization');})->name('logout');

Route::post('/profile/edit','Auth\UserController@save')->name('edit-form');

Route::get('/profile/id={id}','Auth\UserController@getUser')->name('getUser');

Route::post('/registration','Auth\UserController@create')->name('registration-form');

Route::post('/authorization', 'Auth\UserController@login')->name('authorization-form');

