<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas dos MODULOS -> Module
|--------------------------------------------------------------------------
*/


// Route::post('/', 'ModuleController@store')->name('module.store');
// Route::get('/modules/create', 'ModuleController@create')->name('module.create');
// Route::get('/modules', 'ModuleController@index')->name('module.index');
 Route::get('modules/{module}', 'ModuleController@show')->name('module.show');
// Route::get('/modules/{module}/edit', 'ModuleController@edit')->name('module.edit');
// Route::put('/modules/{module}', 'ModuleController@update')->name('module.update');
// Route::delete('/modules/{module}', 'ModuleController@destroy')->name('module.destroy');

/*
|--------------------------------------------------------------------------
| Rotas dos Artigos -> Articles
|--------------------------------------------------------------------------
*/

// Route::post('/', 'ArticleController@store')->name('article.store');
// Route::get('/article/create', 'ArticleController@create')->name('article.create');
// Route::get('/article', 'ArticleController@index')->name('article.index');
Route::get('article/{article}', 'ArticleController@show')->name('article.show');
// Route::get('/article/{article}/edit', 'ArticleController@edit')->name('article.edit');
// Route::put('/article/{article}', 'ArticleController@update')->name('article.update');
// Route::delete('/article/{article}', 'ArticleController@destroy')->name('article.destroy');

/*
|--------------------------------------------------------------------------
| Rotas da HOME PAGE // ROTAS DO LOGIN
|--------------------------------------------------------------------------
*/
Route::get('welcome', 'ModuleController@home')->name('faq.home');
Route::get('/', 'ModuleController@home')->name('faq.home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
