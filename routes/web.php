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
// 	return view('welcome');
// });
// Route::get('/', function () {
// 	return view('frontend.index');
// })->name('frontend');

// Auth::routes(['register'=> false]);
Auth::routes([
        'register' => false
    ]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::resources([
		'usaha' => 'UsahaController',
		'usahafoto' => 'UsahaFotoController',
		'slider' => 'SliderController',
		// 'longsor' => 'LongsorController',
		'tahun' => 'TahunController',
		'kabupaten' => 'KabupatenController',
		'rekap' => 'RekapController',

	]);
	Route::resource('tahun', 'TahunController');
	Route::resource('tahun.longsor', 'LongsorController');

	Route::get('hitung', [
		'as' => 'rekap.hitung',
		'uses' => 'RekapController@hitung',
	]);

	// Data Longsor
	// Route::get('longsor/{longsor}', [
	// 	'as' => 'longsor.index',
	// 	'uses' => 'LongsorController@index',
	// ]);
	// Route::post('longsor/{longsor}', [
	// 	'as' => 'longsor.store',
	// 	'uses' => 'LongsorController@store',
	// ]);
	// Route::get('longsor/{longsor}/create', [
	// 	'as' => 'longsor.create',
	// 	'uses' => 'LongsorController@create',
	// ]);
	// Route::get('longsor/show/{longsor}/', [
	// 	'as' => 'longsor.show',
	// 	'uses' => 'LongsorController@show',
	// ]);
	// Route::get('longsor/edit/{id}/{longsor}/', [
	// 	'as' => 'longsor.edit',
	// 	'uses' => 'LongsorController@edit',
	// ]);
	// Route::post('longsor/edit/{id}/{longsor}/', [
	// 	'as' => 'longsor.update',
	// 	'uses' => 'LongsorController@update',
	// ]);
	// Route::delete('longsor/destroy/{id}/{longsor}/', [
	// 	'as' => 'longsor.destroy',
	// 	'uses' => 'LongsorController@destroy',
	// ]);


	// import excel

	Route::get('template/longsor', [
		'as' => 'template.longsor',
		'uses' => 'LongsorController@generateExcelTemplate',
	]);
	Route::post('tahun/{tahun}/longsor/import', [
		'as' => 'tahun.longsor.import',	
		'uses' => 'LongsorController@importExcel',
	]);

	// Perhitungan CMeans
	Route::post('perhitungan/cmeans', [
		'as' => 'perhitungan.cmeans',
		'uses' => 'PerhitunganController@cmeans',
	]);
	Route::get('perhitungan', [
		'as' => 'perhitungan.index',
		'uses' => 'PerhitunganController@index',
	]);
	Route::get('pengujian', [
		'as' => 'pengujian',
		'uses' => 'PerhitunganController@pengujian',
	]);
});

Route::group(['namespace' => 'Frontend'], function () {
	Route::get('/', 'IndexController@index')->name('index');
	
	Route::get('/error', function () {
		return abort(404);
	});
});