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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/form1', function () {
    return view('form1');
});
Route::get('/form A', function () {
    return view('form A');
});
Route::get('/form B', function () {
    return view('form B');
});
Route::get('/form C', function () {
    return view('form C');
});
Route::post('/savedetail','DetailsController@store');
