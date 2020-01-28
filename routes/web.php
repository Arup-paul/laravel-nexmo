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

//admin panel

Route::get('/secure_panel','adminController@index');
Route::post('/admin_login','adminController@adminLogin');


//admin super controller
Route::get('/dashboard','adminSuperController@index');
Route::get('/admin_logout','adminSuperController@admin_logout');
Route::get('/allUser','adminSuperController@AllUser');
Route::get('/unactive/{id}','adminSuperController@unactive');
Route::get('/active/{id}','adminSuperController@active');
Route::get('/delete/{id}','adminSuperController@delete');
Route::get('/viewuser/{id}','adminSuperController@viewUser');





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify','VerifyController@getVerify')->name('getVerify');
Route::post('/verify','VerifyController@postVerify')->name('verify');


//
