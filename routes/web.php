<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('home');
})->name('home');*/

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
//use Http\Controllers\ContactController;
Route::get('/contact/one', '\App\Http\Controllers\ContactController@oneData')->name('contact-One-data');


Route::get('/one/{hash}', '\App\Http\Controllers\ContactController@showOneMessage')->name('contact-data-one');

Route::get('/', '\App\Http\Controllers\ContactController@allData')->name('contact-data');
Route::post('/contact/submit', '\App\Http\Controllers\ContactController@submit')->name('contact-form');


Route::get('/search', '\App\Http\Controllers\SearchController@search')->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
