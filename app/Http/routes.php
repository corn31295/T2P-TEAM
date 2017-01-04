<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
	Route::group(['prefix'=>'danhmuc'], function(){
		Route::get('list', ['as'=>'admin.danhmuc.getList', 'uses'=>'DanhmucController@getList']);
		Route::get('add', ['as'=>'admin.danhmuc.getAdd', 'uses'=>'DanhmucController@getAdd']);
		Route::post('add', ['as'=>'admin.danhmuc.postAdd', 'uses'=>'DanhmucController@postAdd']);
		Route::get('delete/{id}', ['as'=>'admin.danhmuc.getDelete', 'uses'=>'DanhmucController@getDelete']);
		Route::get('edit/{id}', ['as'=>'admin.danhmuc.getEdit', 'uses'=>'DanhmucController@getEdit']);
		Route::post('edit/{id}', ['as'=>'admin.danhmuc.postEdit', 'uses'=>'DanhmucController@postEdit']);
	});
	Route::group(['prefix'=>'sanpham'], function(){
		Route::get('list', ['as'=>'admin.sanpham.getList', 'uses'=>'SanphamController@getList']);
		Route::get('add', ['as'=>'admin.sanpham.getAdd', 'uses'=>'SanphamController@getAdd']);
		Route::post('add', ['as'=>'admin.sanpham.postAdd', 'uses'=>'SanphamController@postAdd']);
		Route::get('delete/{id}', ['as'=>'admin.sanpham.getDelete', 'uses'=>'SanphamController@getDelete']);
		Route::get('edit/{id}', ['as'=>'admin.sanpham.getEdit', 'uses'=>'SanphamController@getEdit']);
		Route::post('edit/{id}', ['as'=>'admin.sanpham.postEdit', 'uses'=>'SanphamController@postEdit']);
	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('list', ['as'=>'admin.user.getList', 'uses'=>'UserController@getList']);
		Route::get('add', ['as'=>'admin.user.getAdd', 'uses'=>'UserController@getAdd']);
		Route::post('add', ['as'=>'admin.user.postAdd', 'uses'=>'UserController@postAdd']);
		Route::get('delete/{id}', ['as'=>'admin.user.getDelete', 'uses'=>'UserController@getDelete']);
		Route::get('edit/{id}', ['as'=>'admin.user.getEdit', 'uses'=>'UserController@getEdit']);
		Route::post('edit/{id}', ['as'=>'admin.user.postEdit', 'uses'=>'UserController@postEdit']);
	});
});
Route::get('loai-san-pham/{id}/{tenloai}', ['as'=>'loaisanpham', 'uses'=>'WelcomeController@loaisanpham']);
Route::get('chi-tiet-san-pham/{id}/{tenloai}', ['as'=>'chitietsanpham', 'uses'=>'WelcomeController@chitietsanpham']);
Route::get('mua-hang/{id}/{tensanpham}', ['as'=>'muahang', 'uses'=>'WelcomeController@muahang']);
Route::get('gio-hang', ['as'=>'giohang', 'uses'=>'WelcomeController@giohang']);
Route::get('xoa-san-pham/{id}', ['as'=>'xoasanpham', 'uses'=>'WelcomeController@xoasanpham']);

Route::get('dangnhap', 'WelcomeController@getDangnhap');
Route::post('dangnhap', 'WelcomeController@postDangnhap');
Route::get('dangki', [ 'as' => 'dangki','uses'=>'WelcomeController@getDangki']);
Route::post('dangki', 'WelcomeController@postDangki');
Route::post('comment/{id}','CommentController@postComment');

