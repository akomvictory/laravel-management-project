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


Auth::routes();

// ADMIN SECTION
//Route::resource('accomodation', 'Admin\AccomodationController'); // dealing with accomodation reviews
//Route::get('accomodation/reservations/{id}', 'Admin\AccomodationController@single'); // dealing with accomodation reviews
Route::resource('reservation', 'Admin\ReservationController'); // Admin end. Main interface (index)
Route::get('/reservation/{category}/room', 'Admin\ReservationController@category'); // Admin end. reservations for particular category
Route::resource('comment', 'Admin\Usercomments'); // Admin end. comments by user on a particular accomodation

Route::group(['middleware' => ['dashboardadmin']], function () { // only for admin users (Admin and Moderator)
Route::resource('management', 'Admin\ManagementController'); // dealing with accomodation reviews
Route::resource('role', 'Admin\RoleController'); // dealing with admin roles
Route::get('/accomodation/service/{id}', 'Admin\ServiceController@show'); // user end accomation service room detail
Route::get('/accomodation/{category}/category', 'Admin\ServiceController@category'); // user end accomation. Rooms for particular category
Route::get('/accomodation/all', 'Admin\ServiceController@all'); // // user end accomation service. All accomodations

});

//Route::get('/reservation/booking/{category}', 'Admin\AccomodationController@reservation'); // dealing with accomodation reviews

Route::get('/', 'Admin\PrimaryController@index'); // dealing with accomodation reviews

Route::get('/home', 'HomeController@index')->name('home');
