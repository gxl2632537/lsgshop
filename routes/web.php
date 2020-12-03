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

Route::get('/','PagesController@root')->name('root');


Auth::routes();

Route::group(['middleware'=>'auth'],function (){
    Route::get('/email_verify_notice','PagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    Route::group(['middleware'=>'email_verified'],function (){
//       Route::get('/test',function (){
//           return 'your email is verified';
//       }) ;

        Route::get('user_addresses', 'UserAddressionController@index')->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressionController@create')->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressionController@store')->name('user_addresses.store');
        Route::get('user_addresses/{user_address}', 'UserAddressionController@edit')->name('user_addresses.edit');
        Route::put('user_addresses/{user_address}', 'UserAddressionController@update')->name('user_addresses.update');
        Route::delete('user_addresses/{user_address}', 'UserAddressionController@destroy')->name('user_addresses.destroy');
    });
});


