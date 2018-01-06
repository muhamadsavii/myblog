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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['namespace' => 'Frontend'], function () {
	Route::get('/', array('as' => 'frontend-home-index', 'uses' => 'HomeController@index'));
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');





//backend

//home
Route::get('home', 'BackHome@index');

//Article
Route::group(['namespace' => 'Backend'], function () {
	Route::get('article', array('as' => 'backend-article-index', 'uses' => 'ArticlesController@index'));
	Route::get('datatables_user', array('as' => 'datatables-data', 'uses' => 'ArticlesController@anyData'));
});

// Route::get('article', 'ArticlesController@index');
// Route::get('datatables_user', array('as' => 'datatables-data', 'uses' => 'ArticlesController@anyData'));

