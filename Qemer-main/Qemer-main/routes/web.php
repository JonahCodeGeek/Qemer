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
Route::get('/index', function () {
    return view('index');
});


//contact us page
Route::get('/contact', function () {
    return view('pages.contact-page');
});
//contact us page
Route::get('/services', function () {
    return view('pages.service-page');
});

//contact us page
Route::get('/about', function () {
    return view('pages.about-page');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
