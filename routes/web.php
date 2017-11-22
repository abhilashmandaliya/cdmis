<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\ClientRegistered;
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

Route::get('/', 'UserHomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'guest'], function () {
	Route::resource('country', 'CountryController');
	Route::resource('state', 'StateController');
	Route::resource('city', 'CityController');
	Route::resource('user', 'UserController');
	Route::resource('userType', 'UserTypeController');
	Route::resource('instituteCategory', 'InstituteCategoryController');
	Route::resource('consultancyBranch', 'ConsultancyBranchController');
	Route::resource('boardList', 'BoardListController');
	Route::resource('streamCategory', 'StreamCategoryController');
	Route::resource('programCategory', 'ProgramCategoryController');
	Route::resource('programList', 'ProgramListController');
	Route::resource('courseList', 'CourseListController');
	Route::resource('facility', 'FacilityController');
	Route::resource('event', 'EventController');
	Route::resource('institute', 'InstituteController');
});

Route::get('/testmail', function() {
	Mail::to('abhilashmandaliya@gmail.com')->send(new ClientRegistered());	
});