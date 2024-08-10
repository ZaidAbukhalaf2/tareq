<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
})->name('index');

Route::get('/About-Us', function () {

    return view('pages/about-us');
})->name('About-us');

Route::get('/Contact-Us', function () {

    return view('pages/contact-us');
})->name('Contact-Us');

Route::get('/Portfolio', function () {

    return view('pages/portfolio');
})->name('Portfolio');

Route::get('/Services', function () {

    return view('pages/services');
})->name('Services');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
