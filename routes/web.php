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
    return view('index');
});

Auth::routes(); 

    Route::get('login', ['as'=>'user.auth','uses'=>'Auth\LoginController@getUserLogin']);

    Route::post('login', ['as'=>'user.auth','uses'=>'Auth\LoginController@userAuth']);

    Route::get('logout', 'Auth\LoginController@logout');

    Route::get('admin',function(){ return redirect('admin/login');});

    Route::get('admin/login', 'Admin\Auth\LoginController@getAdminLogin');

    Route::post('admin/login', ['as'=>'admin.auth','uses'=>'Admin\Auth\LoginController@adminAuth']);
    // Route::post('/password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

         //admin password reset routes
    // Route::post('/password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    // Route::get('/password/reset','Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    // Route::post('/password/reset','Admin\Auth\ResetPasswordController@reset');
    // Route::get('/password/reset/{token}','Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');


    Route::group(['middleware' => ['admin']], function () {

        Route::get('admin/dashboard', ['as'=>'admin.dashboard','uses'=>'Admin\AdminController@index']);

             //admin password reset routes
        // Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
        // Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    });
