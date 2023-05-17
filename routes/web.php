<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StocksController@index')->name('index');

Route::get('/signup', 'StocksController@signup')->name('signup');

Route::get('/dashboard', 'StocksController@dashboard')->name('dashboard');

Route::get('edit/{id}', 'StocksController@show');

Route::post('edit/{id}', 'StocksController@edit');

Route::get('delete/{id}','StocksController@destroy');

Route::get('/pending', 'StocksController@pending')->name('pending');

Route::get('/on-progress', 'StocksController@onprogress')->name('onprogress');

Route::get('/delivered', 'StocksController@delivered')->name('delivered');

Route::get('/cancelled', 'StocksController@cancelled')->name('cancelled');

Route::get('/statistics', 'StocksController@statistics')->name('statistics');

Route::get('/financial-summary', 'StocksController@financialSummary')->name('financialSummary');

Route::get('/account', 'StocksController@account')->name('account');

Route::get('/about', 'StocksController@about')->name('about');

Route::post('/save-user', 'StocksController@save_user')->name('save-user');

/*
the " ->name('pending') " is the function in the controller
*/


