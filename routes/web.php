<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    //news
    Route::prefix('news')->group(function () {
        //item
        Route::prefix('item')->group(function () {
            Route::get('/', 'NewsController@news');
            Route::get('/create', 'NewsController@create');
            Route::post('/store', 'NewsController@store');
            Route::get('/edit/{id}', 'NewsController@edit');
            Route::post('/update', 'NewsController@update');
            Route::delete('/delete/{id}', 'NewsController@delete');
        });

        //type
        Route::prefix('type')->group(function(){
            Route::get('/', 'NewsTypeController@type');
            Route::get('/create', 'NewsTypeController@create');
            Route::post('/store', 'NewsTypeController@store');
            Route::get('/edit/{id}', 'NewsTypeController@edit');
            Route::post('/update/{id}', 'NewsTypeController@update');
            Route::delete('/delete/{id}', 'NewsTypeController@delete');
        });
    });
    Route::prefix('product')->group(function () {
        Route::prefix('type')->group(function () {
            Route::get('/', 'ProductTypeController@index');
            Route::get('/create', 'ProductTypeController@create');
            Route::post('/store', 'ProductTypeController@store');
            Route::get('/edit/{id}', 'ProductTypeController@edit');
            Route::post('/update/{id}', 'ProductTypeController@update');
            Route::delete('/delete/{id}', 'ProductTypeController@delete');
        });
    });
});

Route::get('/home', 'HomeController@index')->name('home');
