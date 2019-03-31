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

Route::get('/', function () {
    return view('pages.index');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::post('/contact', function () {
//    return view('welcome');
    $data=request()->all();
    echo "Thank you " . $data['name'];
    echo " for  contacting us. Someone will reply to you shortly. ";
})->name('contact');
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
Route::get('/register', function () {
    return view('pages.register');
})->name('register');
