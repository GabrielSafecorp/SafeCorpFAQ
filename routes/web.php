<?php

use Illuminate\Support\Facades\Route;

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


Route::post('/', 'ModuleController@store')->name('module.store');
Route::get('/modules/create', 'ModuleController@create')->name('module.create');
Route::get('/modules', 'ModuleController@index')->name('module.index');
Route::get('/modules/{module}', 'ModuleController@show')->name('module.show');
Route::get('/modules/{module}/edit', 'ModuleController@edit')->name('module.edit');
Route::put('/modules/{module}', 'ModuleController@update')->name('module.update');
Route::delete('/modules/{module}', 'ModuleController@destroy')->name('module.destroy');

Route::post('/', 'ArticleController@store')->name('article.store');
Route::get('/articles/create', 'ArticleController@create')->name('article.create');
Route::get('/articles', 'ArticleController@index')->name('article.index');
Route::get('/articles/{article}', 'ArticleController@show')->name('article.show');
Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('article.edit');
Route::put('/articles/{article}', 'ArticleController@update')->name('article.update');
Route::delete('/articles/{article}', 'ArticleController@destroy')->name('article.destroy');


Route::get('welcome', 'ModuleController@home')->name('faq.home');
Route::get('/', 'ModuleController@home')->name('faq.home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


