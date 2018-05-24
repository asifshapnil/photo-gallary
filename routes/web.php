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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verifyEmail', 'Auth\RegisterController@verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
Route::get('editprofile/{email}', 'AuthController@updateinfo');
Route::post('/editprofile', 'AuthController@saveinfo')->name('editprofile');
Route::get('userLogout', 'AuthController@logout');
Route::get('/seemore', 'HomeController@seemore');
Route::get('/invite/{email}', 'HomeController@invite');
Route::post('/search', 'HomeController@search')->name('search');
Route::get('/search/{email}', 'HomeController@searchprofile');
Route::get('/profile/{email}', 'HomeController@searchprofile');

Route::get('/seeInvites', 'HomeController@seeInvites');
Route::get('/upload', 'HomeController@showUpload');
Route::post('/uploadFiles', 'HomeController@UploadFiles')->name('uploadFiles');


Route::get('/myPhotos', 'HomeController@myPhotos');
Route::get('/accept/{email}', 'HomeController@accept');
Route::get('/decline/{email}', 'HomeController@decline');
