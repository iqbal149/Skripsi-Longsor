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
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::resources([
		'usaha' => 'UsahaController',
		'usahafoto' => 'UsahaFotoController',
		'slider' => 'SliderController',
		'longsor' => 'LongsorController',
		'tahun' => 'TahunController',

	]);

	// Foto Tempat
	Route::get('usahafoto/{usahafoto}', [
		'as' => 'usahafoto.index',
		'uses' => 'UsahaFotoController@index',
	]);
	Route::post('usahafoto/{usahafoto}', [
		'as' => 'usahafoto.store',
		'uses' => 'usahafotoController@store',
	]);
	Route::get('usahafoto/{usahafoto}/create', [
		'as' => 'usahafoto.create',
		'uses' => 'usahafotoController@create',
	]);

	// Data Longsor
	Route::get('longsor/{longsor}', [
		'as' => 'longsor.index',
		'uses' => 'LongsorController@index',
	]);
	Route::post('longsor/{longsor}', [
		'as' => 'longsor.store',
		'uses' => 'LongsorController@store',
	]);
	Route::get('longsor/{longsor}/create', [
		'as' => 'longsor.create',
		'uses' => 'LongsorController@create',
	]);
	Route::get('longsor/show/{longsor}/', [
		'as' => 'longsor.show',
		'uses' => 'LongsorController@show',
	]);
	Route::get('longsor/edit/{id}/{longsor}/', [
		'as' => 'longsor.edit',
		'uses' => 'LongsorController@edit',
	]);
	Route::delete('longsor/destroy/{id}/{longsor}/', [
		'as' => 'longsor.destroy',
		'uses' => 'LongsorController@destroy',
	]);


	// import excel
	Route::get('template/usaha', [
		'as' => 'template.usaha',
		'uses' => 'UsahaController@generateExcelTemplate',
	]);
	Route::post('usaha/import', [
		'as' => 'usaha.import',
		'uses' => 'UsahaController@importExcel',
	]);

	Route::get('template/longsor', [
		'as' => 'template.longsor',
		'uses' => 'LongsorController@generateExcelTemplate',
	]);
	Route::post('longsor/import/{uuid}', [
		'as' => 'longsor.import',	
		'uses' => 'LongsorController@importExcel',
	]);
});

Route::group(['namespace' => 'Frontend'], function () {
	Route::get('/', 'IndexController@index')->name('index');
	Route::get('umkm-list', 'IndexController@umkmList');
	Route::get('detail/{id}', 'IndexController@show')->name('detail');

	Route::get('frontendtour/{id}', 'IndexController@tour')->name('frontendtour');
	Route::post('feedback', 'FeedbackController@store')->name('feedback.store');
	Route::get('frontendinfo/{id}', 'IndexController@info')->name('info');
	Route::get('about', 'IndexController@about')->name('about');
	Route::get('tour', 'IndexController@alltour')->name('tour');
	Route::get('galeri', 'IndexController@allgaleri')->name('galeri');
	Route::get('/error', function () {
		return abort(404);
	});
});