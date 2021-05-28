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
    return view('index');
});
Route::get('/index-demo-1', function () {
    return view('index-demo-1');
});
Route::get('/index-demo-2', function () {
    return view('index-demo-2');
});
Route::get('/index-demo-3', function () {
    return view('index-demo-3');
});
Route::get('/index-demo-4', function () {
    return view('index-demo-4');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
