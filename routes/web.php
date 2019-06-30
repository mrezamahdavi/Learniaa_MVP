<?php

// Route When Browse Domain Site
Route::get('/', 'HomeController@index');
Route::get('/post/{slug}', 'PostController@detail')->name('post.detail');
Route::get('/post/category/{slug}', 'PostController@postByCategory')->name('post.category');
Route::get('/post/tag/{slug}', 'PostController@postByTag')->name('post.tag');

Route::get('/order/{slug}', 'OrderController@create')->name('order.create');

// Comment
Route::post('comment/{post_id}', 'CommentController@store')->name('comment.store');

Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware'=>'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::resource('tag', 'TagController');

    //// User Edit Profile
    Route::get('user/{id}', 'UserController@edit');
    Route::post('user/{id}', 'UserController@update');
    Route::get('user', 'UserController@index')->name('user.index');
    Route::get('user/create/New', 'UserController@create')->name('user.create');
    Route::post('user/create/New', 'UserController@store')->name('user.store');


    // User Role
    Route::get('user/role/edit/{role}/{user_id}', 'UserController@editRole')->name('user.role.edit')->middleware('Admin');

});



/*

Route::get('/', function () {
    return view('index');
});

*/

Auth::routes();


