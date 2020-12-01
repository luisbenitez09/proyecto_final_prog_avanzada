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

Route::get('/test', function () {
    return view('test');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::middleware(['auth'])->group(function() {

    Route::get('/movies','MovieController@index')->name('movies');
	Route::post('/movies','MovieController@store');
    Route::put('/movies','MovieController@update');
    Route::delete('/movies','MovieController@destroy');

    Route::get('/categories','CategoryController@index')->name('categories');
    Route::put('/categories','CategoryController@update');
    Route::post('/categories','CategoryController@store');
    Route::delete('/categories','CategoryController@destroy');

    Route::get('/users','UserController@index')->name('users');
    Route::put('/users','UserController@update');
    Route::post('/users','UserController@store');
    Route::delete('/users','UserController@destroy');

    Route::get('/loans','LoanController@index')->name('loans');
    Route::put('/loans','LoanController@update');
    Route::post('/loans','LoanController@store');
    Route::delete('/loans','LoanController@destroy');

});

