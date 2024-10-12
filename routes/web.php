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
    return view('onepage');
})->name('home');

Route::get('/contato', function () {
    return view('contact');
})->name('contato');

Route::get('/whats', function () {
    return redirect('https://wa.me/+5515998290671');
});
