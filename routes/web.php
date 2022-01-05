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
Auth::routes();
Route::get('/', function () {
    return redirect('home');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', function() {
        return view('home');
    });
    Route::get('/welcome', function () {
        return view('auth.welcome');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/getData', 'HomeController@getData');
    Route::get('/getAdminData', 'Admin\AdminController@getData');
    Route::post('/updateData', 'HomeController@updateData');
    Route::post('/updateAdminData', 'Admin\AdminController@updateData');
    Route::post('/getDetailsData', 'HomeController@getDetailsData');
});


Route::get('/password/email', function () {
    return view('/auth/passwords/confirm');
});

Route::get('/password/new', function () {
    return view('/auth/passwords/reset');
});

Route::get('/password/success', function () {
    return view('/auth/passwords/success');
});

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/admin', 'Admin\AdminController@index');
});




