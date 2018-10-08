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
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');

//////////////// Admin routes /////////////////
Route::group(['prefix'=>'admin-dashboard','middleware'=>['web','admin']],function (){

    Route::get('/','AdminController@index')->name('admin.index');

    Route::get('getdonations','AjaxDataController@showDonations')->name('ajaxData');
    Route::get('/getdonations/datadonations','AjaxDataController@getData')->name('ajaxdata.getdata');

    Route::get('/getreports','AjaxDataController@showReports')->name('ajaxReports');
    Route::get('/getrports/datareport','AjaxDataController@getReports')->name('ajaxReports.data');

    Route::get('/donner/{id}/edit','AdminController@editDonations');
    Route::patch('/donnerupdate/{id}','AdminController@updateDonation')->name('update.donations');
    Route::get('/reporter/{id}/edit','AdminController@editReport');
    Route::patch('/reporterupdate/{id}','AdminController@updateReport')->name('update.Reports');

    Route::resource('/contact','contactController');
    Route::get('/getmessages','AjaxDataController@getMessages')->name('ajaxMessages');

    Route::resource('/users','AdminUsersController');
    Route::get('/getusers','AjaxDataController@getUsers')->name('ajaxUsers');






});

/////////////// user authenticated routes ///////////////

Route::resource('/donations','DonationController')->middleware('auth');
Route::resource('/reports','ReportController')->middleware('auth');
Route::get('/user/edit/user','AdminUsersController@editUserProfile')->name('edit.userProfile')->middleware('auth');
Route::patch('/user/edit/user','AdminUsersController@updateUserProfile')->name('update.userProfile')->middleware('auth');


///////////////////normal users//////////////////////////
Route::get('/contact','HomeController@contact');
Route::post('/contact','ContactController@store');
Route::post('/contact','ContactController@store');
Route::get('/aboutus','HomeController@about');
