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

Route::get('/home','memberController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('members', 'memberController');

Route::get('/calendar/display','CalendarController@display')->name('calendar.display');
Route::get('/calendar/json','CalendarController@json')->name('calendar.json');

Route::get('/customers/new', 'CustomerController@new');
Route::post('/customers/create', 'CustomerController@create')->name('customers.create'); 
Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::post('/customers/update', 'CustomerController@update');

Route::resource('courts', 'courtController');

Route::resource('bookings', 'bookingController');

Route::get('/courtratings/ratecourt/{court}','courtratingController@ratecourt')->name('courtratings.ratecourt');

Route::get('/courtratings/court/{court}','courtratingController@showcourtratings')->name('courtratings.showcourtratings');

Route::resource('membershiptypes', 'membershiptypeController');

Route::get('/loggedInMember','memberController@getLoggedInMemberDetails');


Route::resource('courtratings', 'courtratingController');