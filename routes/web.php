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

Route::middleware(['auth'])->group( function() {
    Route::get('/', function () {
        return redirect('dashboard');
    });
    Route::get('/dashboard', 'HomeController@home')->name('dashboard');

    Route::resource('categories', 'CategoryController');
    Route::resource('nfts', 'NFTController');
});

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);
