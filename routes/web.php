<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Website Routes Are Here
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*
|--------------------------------------------------------------------------
| Backend Admin Routes Are Here
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard', 'App\Http\Controllers\Backend\PagesController@index')->name('dashboard');

    // Brand Route
    Route::group(['prefix' => 'brand'], function (){
        Route::get('/manage', 'App\Http\Controllers\Backend\BrandController@index')->name('brand.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\BrandController@create')->name('brand.create');
        Route::post('/store', 'App\Http\Controllers\Backend\BrandController@store')->name('brand.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BrandController@edit')->name('brand.edit');
        Route::post('/edit/{id}', 'App\Http\Controllers\Backend\BrandController@update')->name('brand.update');
        Route::post('/delete/{id}', 'App\Http\Controllers\Backend\BrandController@destroy')->name('brand.destroy');
    });

    // Category Route
    Route::group(['prefix' => 'category'], function (){
        Route::get('/manage', 'App\Http\Controllers\Backend\CategoryController@index')->name('category.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CategoryController@create')->name('category.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CategoryController@store')->name('category.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CategoryController@edit')->name('category.edit');
        Route::post('/edit/{id}', 'App\Http\Controllers\Backend\CategoryController@update')->name('category.update');
        Route::post('/delete/{id}', 'App\Http\Controllers\Backend\CategoryController@destroy')->name('category.destroy');
    });

    // Product Route
    Route::group(['prefix' => 'product'], function (){
        Route::get('/manage', 'App\Http\Controllers\Backend\ProductController@index')->name('product.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\ProductController@create')->name('product.create');
        Route::post('/store', 'App\Http\Controllers\Backend\ProductController@store')->name('product.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\ProductController@edit')->name('product.edit');
        Route::post('/edit/{id}', 'App\Http\Controllers\Backend\ProductController@update')->name('product.update');
        Route::post('/delete/{id}', 'App\Http\Controllers\Backend\ProductController@destroy')->name('product.destroy');
    });
    
});