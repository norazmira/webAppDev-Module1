<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/accountant', [
        'uses' => 'HomeController@accountant',
        'as' => 'accountant',
        'middleware' => 'roles',
        'roles' => ['Accountant']
    ]);

Route::get('/accountantclerk', [
        'uses' => 'HomeController@accountantclerk',
        'as' => 'accountantclerk',
        'middleware' => 'roles',
        'roles' => ['AccountantClerk']
    ]);

Route::get('/auditor', [
        'uses' => 'HomeController@auditor',
        'as' => 'auditor',
        'middleware' => 'roles',
        'roles' => ['Auditor']
    ]);

Route::get('/auditorclerk', [
        'uses' => 'HomeController@auditorclerk',
        'as' => 'auditorclerk',
        'middleware' => 'roles',
        'roles' => ['AuditorClerk']
    ]);

Route::get('/companydirector', [
        'uses' => 'HomeController@companydirector',
        'as' => 'companydirector',
        'middleware' => 'roles',
        'roles' => ['CompanyDirector']
    ]);

Route::get('/companysecretary', [
        'uses' => 'HomeController@companysecretary',
        'as' => 'companysecretary',
        'middleware' => 'roles',
        'roles' => ['CompanySecretary']
    ]);
Route::get('/admin', [
        'uses' => 'HomeController@admin',
        'as' => 'admin',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
Route::get('/admin2', [
        'uses' => 'HomeController@admin2',
        'as' => 'admin2',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);


Route::get('/update', 'HomeController@update');


Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();


Route::post('/admin/assign-roles', [
        'uses' => 'HomeController@postAdminAssignRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

