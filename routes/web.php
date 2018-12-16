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

Route::get('/', 'HomeController@index');
Route::group(['prefix' => 'admin'], function(){
	// information
	Route::get('/information', 'AdminController@information' );
	Route::get('/createInfor',function(){ return view('admin/createInfor');});
	Route::post('createInformation', 'AdminController@createInformation');
	Route::get('editInfor/{id}','AdminController@editInfor');
	Route::post('updateInfor/{id}','AdminController@updateInfor');
	Route::delete('destroyInfor/{id}', 'AdminController@destroyInfor');
	// post
	Route::get('/post', 'AdminController@post' );
	Route::get('/createPost',function(){ return view('admin/createPost');});
	Route::post('processPost', 'AdminController@createPost');
	Route::get('editPost/{id}','AdminController@editPost');
	Route::post('updatePost/{id}','AdminController@updatePost');
	Route::delete('destroyPost/{id}', 'AdminController@destroyPost');
});

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
Route::get('detailInfor/{id}','HomeController@detailInfor');
Route::get('/m_profile_kepengurusan', function(){
	return view('m_profile_kepengurusan');
});
Route::get('/m_profile_jtik', function(){
	return view('m_profile_jtik');
});
Route::get('/m_profile_kepengurusan', function(){
	return view('m_profile_kepengurusan');
});
Route::get('/m_minatbakat', function(){
	return view('m_minatbakat');
});

Route::get('/tambahberita', function(){
	return view('admin/tambah_berita');
});

