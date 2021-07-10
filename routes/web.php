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

// 前端
Route::get('/', 'FrontController@index');

Route::get('/aboutus', 'FrontController@aboutUs');
Route::post('/contactus/store', 'ContactUsController@store');

Route::get('/newsIndex', 'FrontController@newsIndex');
Route::get('/newsdetail', 'FrontController@newsDetail');

Route::get('/product', 'FrontController@product');
Route::get('/product/detail/{id}', 'FrontController@productDetail');


Route::prefix('/cart')->group(function () {
    Route::post('/add', 'FrontController@add');
    // Route::get('/addtest', 'FrontController@addtest');
    Route::get('/clear', 'FrontController@clear');
    Route::get('/content', 'FrontController@content');

    Route::get('/step1', 'FrontController@cartStep1');
    Route::post('/update','FrontController@update');
    Route::post('/delete', 'FrontController@delete');

    Route::get('/step2', 'FrontController@cartStep2');
    Route::get('/step3', 'FrontController@cartStep3');
    Route::get('/step4', 'FrontController@cartStep4');
});

Route::get('/contactus', 'FrontController@contactus');




// 後端
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
            Route::post('/update/{id}', 'NewsController@update');
            Route::delete('/delete/{id}', 'NewsController@delete');
        });

        //type
        Route::prefix('type')->group(function () {
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
        Route::prefix('item')->group(function () {
            Route::get('/', 'ProductController@index');
            Route::get('/create', 'ProductController@create');
            Route::post('/store', 'ProductController@store');
            Route::get('/edit/{id}', 'ProductController@edit');
            Route::post('/update/{id}', 'ProductController@update');
            Route::delete('/delete/{id}', 'ProductController@delete');
        });
        Route::post('/deleteImage', 'ProductController@deleteImage');
    });


    // 聯絡我們管理
    Route::prefix('contactus')->group(function () {
        Route::get('/', 'ContactUsController@index');
        Route::get('/seemore/{id}', 'ContactUsController@seemore');
        Route::delete('/delete/{id}', 'ContactUsController@delete');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
