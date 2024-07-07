<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/news', 'HomeController@news')->name('news');
    Route::get('/news/detail', 'HomeController@newsDetail')->name('newsDetail');
    Route::get('/service', 'HomeController@service')-> name('service');
    Route::get('/service/detail', 'HomeController@serviceDetail')->name('serviceDetail');

    Route::get('/', 'TaskController@index')->name('task.index');
    Route::get('/task/create', 'TaskController@create')->name('task.create');
    Route::post('/task/store', 'TaskController@store')->name('task.store');
    Route::get('/task/{id}' [] );
});