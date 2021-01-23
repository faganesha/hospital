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

Auth::routes();

Route::group(['middleware' => ['checkLogin']], function(){
	Route::post('/test/insert', 'ResultController@store')->name('test_insert');

// Route::get('/result', 'ResultController@index')->name('result');

	Route::get('/resultsrq', 'ResultController@srq')->name('resultSrq');
	Route::get('/resultbdi', 'ResultController@bdi')->name('resultBdi');
	Route::get('/resultdass', 'ResultController@dass')->name('resultDass');

	Route::get('/consentsrq', 'ConsentController@consentsrq')->name('consentsrq');
	Route::get('/consentdass', 'ConsentController@consentdass')->name('consentdass');
	Route::get('/consentbdi', 'ConsentController@consentbdi')->name('consentbdi');

	Route::post('/consent/insert', 'ConsentController@store')->name('consent_insert');

	Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

	Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@index')->name('home');

	Route::get('/testsrq', 'TestController@indexsrq');
	Route::get('/testbdi', 'TestController@indexbdi');
	Route::get('/testdass', 'TestController@indexdass');
});



Route::group(['middleware' => ['auth', 'adminMiddleware']], function(){

	Route::get('/', 'TestController@srqtest');

	Route::get('srqtest', 'TestController@srqtest')->name('test.srq');
	Route::get('bditest', 'TestController@bditest')->name('test.bdi');
	Route::get('dasstest', 'TestController@dasstest')->name('test.dass');

	Route::get('addsrqtest', 'TestController@addsrqtest');
	Route::get('addbditest', 'TestController@addbditest');
	Route::get('adddasstest', 'TestController@adddasstest');


	//addtest route is to add question for both srq and dass test
	Route::post('/addtest', 'TestController@addTestQuestion');

	//addtestbdi route is espescially for bdi
	Route::post('/addtestbdi', 'TestController@addTestBdi');

	Route::get('test/{id}', 'TestController@destroy')->name('test.delete');

	Route::get('srqtestresult', 'ResultAdminController@srq');
	Route::get('dasstestresult', 'ResultAdminController@dass');
	Route::get('bditestresult', 'ResultAdminController@bdi');

	Route::get('srqdetail/{id}', 'ResultController@srqtestdetail')->name('srqtestdetail');
	Route::get('bdidetail/{id}', 'ResultController@bditestdetail')->name('bditestdetail');
	Route::get('dassdetail/{id}', 'ResultController@dasstestdetail')->name('dasstestdetail');
	Route::get('dassedit/{id}', 'ResultController@dasstestedit')->name('dassedit');
	Route::post('scoredass', 'ResultController@scoredass')->name('scoredass');

	Route::post('dassupdate', 'ResultController@dasstestupdate')->name('dassupdate');

	Route::get('printsrq', 'ResultController@printsrq');

});

