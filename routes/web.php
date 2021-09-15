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
    Route::group(['prefix' => 'brand'], function ()){
        Route::get('/manage', 'App\Http\Controllers\Backend\BrandController@index')->name('brand.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\BrandController@create')->name('brand.create');
        Route::post('/store', 'App\Http\Controllers\Backend\BrandController@store')->name('brand.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BrandController@edit')->name('brand.edit');
        Route::post('/edit/{id}', 'App\Http\Controllers\Backend\BrandController@update')->name('brand.update');
        Route::post('/delete/{id}', 'App\Http\Controllers\Backend\BrandController@destroy')->name('brand.destroy');
    }
});