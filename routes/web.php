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
Route::group(['middleware' => ['role']], function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('admin', 'Admin\AdminController');
    Route::resource('category', 'Admin\CategoryController');
    Route::put('category-name/{category}', 'Admin\CategoryController@updateName')->name('category.name.update');
    Route::resource('post', 'Admin\PostController');
    Route::get('/AddImg', 'Admin\PostController@AddImg')->name('post.AddImg');
    Route::get('/AddText', 'Admin\PostController@AddText')->name('post.AddText');
});


