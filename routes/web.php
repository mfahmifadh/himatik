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
	Route::get('/createInfor',function(){ return view('admin/createInfor');});
	Route::post('createInformation', 'AdminController@createInformation');
	Route::get('editInfor/{id}','AdminController@editInfor');
	Route::post('updateInfor/{id}','AdminController@updateInfor');
	Route::delete('destroyInfor/{id}', 'AdminController@destroyInfor');
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

