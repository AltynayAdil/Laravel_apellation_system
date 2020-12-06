<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index')->name('home');
Route::get('/generate/{id}','PdfController@generatePDF')->name('generatePDF');
Route::get('/pdf/{id}/download', 'PdfController@statement')->name('pdf.download');
Route::get('/signin','AuthController@getSignin')->name('auth.signin');
Route::post('/signin', 'AuthController@postsignin');

Route::get('/student/{id}','HomeController@student')->name('student');
Route::post('/store', 'HomeController@store')->name('store');
Route::get('/zayav','HomeController@zayav')->name('zayav');
Route::get('/statusyes/{id}','HomeController@statusyes')->name('home.statusyes');
Route::get('/statuscomyes/{id}','HomeController@statuscomyes')->name('home.statuscomyes');
Route::get('/causeno/{id}','HomeController@causeno')->name('home.causeno');
Route::get('/causeyes/{id}','HomeController@causeyes')->name('home.causeyes');
Route::get('/managerpage/{id}','HomeController@managerpage')->name('managerpage');

Route::get('/commission/{id}','CommissionController@index')->name('commission.index');
Route::get('/commission/{id}/download','CommissionController@download')->name('commission.download');
Route::get('/commission','CommissionController@protokol')->name('commission.protokol');
Route::get('/create/{id}','CommissionController@create')->name('create.protokol');

Route::get('/detail/{id}','HomeController@detail')->name('home.detail');
Route::get('/downloadpdf/{id}','HomeController@downloadpdf')->name('home.downloadpdf');

Route::post('/edit/{statement}','HomeController@update')->name('home.update');
Route::delete('/destroy/{id}','HomeController@destroy')->name('home.destroy');
Route::get('/test', 'TestController@index')->name('test.index');
