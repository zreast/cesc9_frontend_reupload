<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Frontend Zone

Route::get('/', function () {
    return view('index');
});

// Backend Zone

Route::controllers([
	'backend/auth' => 'Backend\AuthController',
]);

Route::get('auth/facebook', ['uses' => 'AuthController@redirectToFacebook', 'as' => 'student.auth']);
Route::get('auth/facebook/callback', 'AuthController@handleFacebookCallback');

Route::group(['middleware' => 'isStudent'], function()
{
	Route::get('student/', ['uses' => 'Student\DashboardController@index', 'as' => 'student.index']);
	Route::get('student/selectcamp/robot', ['uses' => 'Student\DashboardController@selectCampRobot', 'as' => 'student.selectcamp.robot']);
	Route::get('student/selectcamp/network', ['uses' => 'Student\DashboardController@selectCampNetwork', 'as' => 'student.selectcamp.network']);
	Route::get('student/close', ['uses' => 'Student\DashboardController@closeCamp', 'as' => 'student.close']);

	Route::get('student/editApplicant', ['uses' => 'Student\ApplicantController@getApplicantEdit', 'as' => 'student.applicant.edit']);
	Route::post('student/editApplicant', 'Student\ApplicantController@postApplicantEdit');
	Route::get('student/applicant/genPDF', ['uses' => 'Student\ApplicantController@getApplicantPDF', 'as' => 'student.applicant.showPDF']);
	Route::get('student/document', ['uses' => 'Student\DocumentController@getDocument', 'as' => 'student.document']);

	Route::get('student/auth/logout', ['uses' => 'AuthController@getLogout', 'as' => 'student.logout']);
});

Route::group(['middleware' => 'isAdmin'], function()
{
	Route::resource('backend', 'Backend\DashboardController', ['only' => ['index']]);
	Route::resource('backend/applicant', 'Backend\ApplicantController', ['except' => ['create', 'store', 'setStatus']]);

	Route::get('backend/applicant/genPDF/{applicant}', ['uses' => 'Backend\ApplicantController@getApplicantPDF', 'as' => 'backend.applicant.showPDF']);
	Route::get('backend/applicant/{id}/setStatus/{status}', ['uses' => 'Backend\ApplicantController@getApplicantsetStatus', 'as' => 'backend.applicant.setStatus']);

	Route::get('backend/editApplicant/{id}/', ['uses' => 'Backend\ApplicantController@getApplicantEdit', 'as' => 'backend.applicant.edit']);
	Route::post('backend/editApplicant/{id}/', 'Backend\ApplicantController@postApplicantEdit');
});

