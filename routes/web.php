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

    Route::match(['get','post'],'logout', 'Auth\LoginController@logout');


    Route::get('admin',function(){ return redirect('admin/login');});

    Route::get('admin/login', 'Admin\Auth\LoginController@getAdminLogin');

    Route::post('admin/login', ['as'=>'admin.auth','uses'=>'Admin\Auth\LoginController@adminAuth']);
    
    Route::match(['get','post'],'admin/logout', ['as'=>'admin.logout','uses'=>'Admin\Auth\LoginController@logout']);
<<<<<<< HEAD
    // Route::match(['get','post'],'admin/logout', ['as'=>'admin.auth','uses'=>'Admin\Auth\LoginController@logout']);
    // Route::post('/password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
=======



    // Index page
    Route::match(['get','post'],'category/autocomplete', 'AjaxController@categoryautocomplete');
>>>>>>> e9f6daf1b6de51a2c62c6be03d921c80ceb1e4a2

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

        ///Priya///
      
    Route::resource('admin/addStock', 'admin\StockController');    ///Add Stock////
    Route::resource('admin/addServices', 'admin\ServiceController');   ///Add Services ////
   
    Route::resource('admin/medicineBill', 'admin\MedicineInvoiceController');  ///Medicines bill ////
    Route::get('admin/pdfview/{id}','admin\MedicineInvoiceController@pdfview22'); ///Medicines bill  PDF ////
    Route::get('admin/medicineBillView', 'admin\MedicineInvoiceController@viewBills');  ///Medicines View bill   ////
    Route::get('admin/medicineInvoice/{id}', 'admin\MedicineInvoiceController@invoice'); ///Medicines   bill  Print ////
    Route::resource('admin/treatmentBill', 'admin\TreatmentInvoiceController');             ///Treatment  bill ////
    Route::get('admin/treatmentInvoice/{id}', 'admin\TreatmentInvoiceController@invoice');  ///Treatment   bill  Print ////
    Route::get('admin/treatmentBillView', 'admin\TreatmentInvoiceController@viewBills');    ///Treatment    View bill////
    Route::get('admin/treatmentpdfview/{id}','admin\TreatmentInvoiceController@treat_pdfview'); ///Treatment bill  PDF ////
    });
