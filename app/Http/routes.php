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

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'LoginController@login');

Route::get('/login','LoginController@login');

Route::get('/doLogin','LoginController@doLogin');

Route::get('/doLogout','LoginController@doLogout');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'common', 'namespace' => 'common'], function()
{
	Route::get('/Kehu/getByNameAndPhone', 'KehuController@getByNameAndPhone');
	Route::get('/Kehu/getById','KehuController@getById');
	Route::post('/Kehu/update','KehuController@update');
	Route::post('/Kehu/insert','KehuController@insert');

	Route::get('/Area/getLowerById','AreaController@getLowerById');

	Route::get('/Tuoyunbu/getAll','TuoyunbuController@getAll');
	Route::get('/Tuoyunbu/getByNameAndPhone','TuoyunbuController@getByNameAndPhone');
	Route::get('/Tuoyunbu/getById','TuoyunbuController@getById');

	Route::get('/Shoukuanfs/getAll','ShoukuanfsController@getAll');

	Route::get('/User/getAll','UserController@getAll');

	Route::get('/Bm/getAll','BmController@getAll');
	Route::post('/Bm/insert','BmController@insert');
	Route::post('/Bm/deleteByBm_id','BmController@deleteByBm_id');

	Route::get('/Zw/getAll','ZwController@getAll');
	Route::get('/Zw/getZwByBm','ZwController@getZwByBm');
	Route::post('/Zw/insert','ZwController@insert');
	Route::post('/Zw/deleteByGz_id','ZwController@deleteByGz_id');
});

Route::group(['prefix' => 'home', 'namespace' => 'home' ,'middleware' => 'login'], function()
{
	Route::get('/', 'HomeController@index');
});

Route::group(['prefix' => 'UserManage', 'namespace' => 'UserManage' ,'middleware' => 'login'], function()
{
	Route::get('/', 'UserManageController@index');
	Route::get('/queryKehu', 'UserManageController@queryKehu');
	Route::get('/addKehu', 'UserManageController@addKehu');
});

Route::group(['prefix' => 'StaffManage', 'namespace' => 'StaffManage' ,'middleware' => 'login'], function()
{
	Route::get('/', 'StaffManageController@index');
	Route::get('/bmzwManage', 'StaffManageController@bmzwManage');
	Route::get('/addKehu', 'StaffManageController@addKehu');

	Route::get('/Bm_nameValidate','StaffManageController@Bm_nameValidate');
	Route::get('/Bm_idValidate','StaffManageController@Bm_idValidate');

	Route::get('/Gz_nameValidate','StaffManageController@Gz_nameValidate');
	Route::get('/Gz_idValidate','StaffManageController@Gz_idValidate');
});