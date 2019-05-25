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

Route::get('/', 'PublicController@index')->name('index');
Route::get('about', 'PublicController@about')->name('about');
Route::get('post/{id}', 'PublicController@singlePost')->name('singlePost');
Route::get('contact', 'PublicController@contact')->name('contact');

Auth::routes();
Route::prefix('admin')->group(function(){
    Route::get('dashboard', 'AdminController@dashboard')->name('adminDashboard');
    Route::get('posts', 'AdminController@posts')->name('adminPosts');
    Route::get('comments', 'AdminController@comments')->name('adminComments');
    Route::get('users', 'AdminController@users')->name('adminUsers');
     Route::get('posts/{id}/edit', 'AdminController@editPost')->name('editPost');
    Route::post('posts/{id}/update', 'AdminController@updatePost')->name('updatePost');
    Route::post('posts/{id}/delete', 'AdminController@deletePost')->name('deletePost');
    /************ Admin Users *****************/
    Route::get('user/{id}/edit', 'AdminController@editUser')->name('editUser');
    Route::post('user/{id}/update', 'AdminController@updateUser')->name('updateUser');
    Route::post('user/{id}/delete', 'AdminController@deleteUser')->name('deleteUser');
});
Route::prefix('author')->group(function(){
    Route::get('dashboard', 'AuthorController@dashboard')->name('authorDashboard');
    Route::get('posts', 'AuthorController@posts')->name('authorPosts');
    Route::get('comments', 'AuthorController@comments')->name('authorComments');
    Route::get('newpost', 'AuthorController@newPost')->name('newPost');
    Route::post('newpost', 'AuthorController@createPost')->name('createPost');
    Route::get('posts/{id}/edit', 'AuthorController@editPost')->name('editPost');
    Route::post('posts/{id}/update', 'AuthorController@updatePost')->name('updatePost');
    Route::post('posts/{id}/delete', 'AuthorController@deletePost')->name('deletePost');
    
});
Route::prefix('user')->group(function(){
    Route::get('dashboard', 'UserController@dashboard')->name('userDashboard');
    Route::get('comments', 'UserController@comments')->name('userComments');
    Route::get('profile','UserController@userProfile')->name('userProfile');
    Route::post('profile','UserController@userProfilePost')->name('userProfilePost');
    
});


Route::get('/dashboard', 'HomeController@index')->name('dashboard');
