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


Route::middleware(['auth'])->group(function(){
	Route::get('/', 'IndexController@index');
	Route::get('/documents/{id}/{type?}','IndexController@documents');
	Route::get('/sbmembers','IndexController@sbmembers');

	Route::get('/admin','DashboardController@index');
	
	Route::get('/admin/documents','DocumentController@index');	
	Route::get('/admin/documents/create','DocumentController@create');	
	Route::post('/admin/documents/store','DocumentController@store');	
	Route::post('/admin/documents/delete','DocumentController@delete');
	Route::get('/admin/documents/edit/{id}','DocumentController@edit');

	Route::get('/admin/authors/','AuthorController@index');
	Route::get('/admin/authors/create','AuthorController@create');
	Route::post('/admin/authors/store','AuthorController@store');

	Route::get('/admin/announcement','AnnouncementController@index');	
	Route::post('/admin/announcement/store','AnnouncementController@store');	

	Route::get('/admin/users','UserController@index');
	Route::get('/admin/signup','UserController@signup');
	Route::post('/admin/signup','UserController@store');

	Route::get('/admin/news','NewsController@index');
	Route::get('/admin/news/create','NewsController@create');
	Route::post('/admin/news/store','NewsController@store');
	Route::post('/admin/news/delete','NewsController@delete');
	Route::get('/admin/news/edit/{id}','NewsController@edit');
	Route::get('/admin/officers','OfficerController@index');
	Route::get('/admin/officers/create','OfficerController@create');
	Route::post('/admin/officers/store','OfficerController@store');
	Route::post('/admin/officers/delete','OfficerController@delete');
	Route::get('/admin/officers/edit/{id}','OfficerController@edit');

	Route::get('/news','IndexController@news');
	Route::get('/news/{id}','IndexController@news_details');

	Route::get('/pclofficers/{location?}','IndexController@officers');
	Route::get('/councilors/{town?}/{type?}','IndexController@councilors');


	Route::get('/link',function(){
		Artisan::call('storage:link');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('info', function(){
	echo phpinfo();
});