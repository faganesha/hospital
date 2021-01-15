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

Route::get('/', function () {
	return view('landing');
});

//PASANG MIDDLEWARE CHECK LOGIN

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('checkLogin');
// Route::get('/', 'HomeController@index')->name('home');

Route::get('/testsrq', 'TestController@indexsrq')->middleware('checkLogin');
Route::get('/testbdi', 'TestController@indexbdi')->middleware('checkLogin');
Route::get('/testdass', 'TestController@indexdass')->middleware('checkLogin');

Route::post('/test/insert', 'ResultController@store')->name('test_insert');

// Route::get('/result', 'ResultController@index')->name('result');

Route::get('/resultsrq', 'ResultController@srq')->name('resultSrq');

Route::get('/consent', 'ResultController@consent')->name('consent');

Route::post('/consent/insert', 'ConsentController@store')->name('consent_insert');



Route::group(['middleware' => ['auth', 'adminMiddleware']], function(){

	Route::get('srqtest', 'TestController@srqtest')->name('test.srq');
	Route::get('bditest', 'TestController@bditest')->name('test.bdi');
	Route::get('dasstest', 'TestController@dasstest')->name('test.dass');

	Route::get('addsrqtest', 'TestController@addsrqtest');
	Route::get('addbditest', 'TestController@addbditest');
	Route::get('adddasstest', 'TestController@adddasstest');

	Route::post('/addtest', 'TestController@addTestQuestion');
	Route::post('/addtestbdi', 'TestController@addTestBdi');
	Route::get('srqtest/{id}', 'TestController@destroy')->name('test.delete');
	Route::get('srqtestresult', 'ResultController@srqtestresult');
	Route::get('testdetail/{id}', 'ResultController@srqtestdetail')->name('testdetail');

	// Route::get('printtest', 'ResultController@printsrq');

});

