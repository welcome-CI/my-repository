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

Route::get('/first-build', function () {
    return 1;
});

Route::get('/second-buid', function () {
    return 2;
});

Route::get('/test-true', function (){
    return 1;
});

Route::get('/demo', function (){
    return 1;
});

Route::get('/relase', function () {
    return 1;
});

Route::get('/rease2', function () {
    return 1;
});

Route::get('/rease22', function () {
    return 1;
});
