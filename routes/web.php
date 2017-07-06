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




Route::get('/blog/{slug}', 'BlogController@getSingle')->name('blog.single')->where('slug' , '[\w\d\-\_]+');
Route::get('blog', 'BlogController@getIndex')->name('blog.index');
Route::get('/', 'PagesController@getIndex');
Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');

// Portfolios

Route::resource('portfolios' , 'PortfolioController');

// Categories

Route::resource('categories', 'CategoryController' , ['except' => ['create'] ] );


Route::resource('tags', 'TagController' , ['except' => ['create'] ] );


Auth::routes();



