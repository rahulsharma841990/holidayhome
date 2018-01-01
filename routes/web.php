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
    /**
     * Fron End Routes
     */
    Route::get('/',['as'=>'index','uses'=>'Website\HomeController@index']);
    Route::get('/about',['as'=>'about','uses'=>'Website\HomeController@about']);
    Route::get('/gallery',['as'=>'gallery','uses'=>'Website\HomeController@gallery']);
    Route::get('/rooms',['as'=>'rooms','uses'=>'Website\HomeController@rooms']);
    Route::get('/contact',['as'=>'contact','uses'=>'Website\HomeController@contact']);

    /**
     * Back End Routes
     */
    

    Auth::routes();

