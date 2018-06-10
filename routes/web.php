<?php

// User Routes
Route::group(['namespace' => 'User'],function(){
    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home.page',
    ]);

    Route::get('/post/tag/{tag}', [
        'uses' => 'HomeController@tag',
        'as' => 'post.tag.page',
    ]);

    Route::get('/post/category/{category}', [
        'uses' => 'HomeController@category',
        'as' => 'post.category.page',
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
    Route::resource('/admin/permission','PermissionController');
    Route::resource('/admin/role','RoleController');
    Route::resource('/admin/user','UserController');
    Route::resource('/admin/post','PostController');
    Route::resource('/admin/category','CategoryController');
    Route::resource('/admin/tag','TagController');

    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
