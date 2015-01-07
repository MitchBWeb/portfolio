<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','PagesController@index');
Route::get('about','PagesController@about');
Route::get('portfolio','PortfolioController@index');
Route::get('blog','BlogController@index');
Route::get('blog/{blog_title}', function($blog_title){
	$blog = Blog::whereBlog_title($blog_title)->first();
	
	return View::make('blog.show', ['blog' => $blog]);
});
Route::get('admin', array('uses' => 'AdminController@showLogin'));
Route::post('admin', array( 'uses' => 'AdminController@doLogin'));
//Route::get('admin','AdminController@showSuccess');