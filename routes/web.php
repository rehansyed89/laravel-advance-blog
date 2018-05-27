<?php

// User Routes
Route::group(['namespace' => 'User'],function(){
    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home.page',
    ]);

    Route::get('/post/{post}', [
        'uses' => 'PostController@index',
        'as' => 'post.page',
    ]);
});

// Admin Routes
Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin/home', [
        'uses' => 'HomeController@index',
        'as' => 'admin.home',
    ]);
    Route::resource('/admin/user','UserController');
    Route::resource('/admin/post','PostController');
    Route::resource('/admin/category','CategoryController');
    Route::resource('/admin/tag','TagController');
});

