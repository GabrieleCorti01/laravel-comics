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
    $series_list = config('series_list');
    return view('home', ['series_list' => $series_list]);
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/serie/{id}', function ($id) {
    $series = config('series_list');
    $serie = $series[$id];
    return view('serie', ['serie' => $serie]);
})->name('serie');

Route::get('/footer', function () {
    $series_list = config('footer_list');
    return view('footer', ['footer_list' => $footer_list]);
})->name('footer');







