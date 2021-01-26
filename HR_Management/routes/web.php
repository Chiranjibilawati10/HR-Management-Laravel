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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');

//routes for company

Route::get('/company', 'CompanyController@index');
Route::get('/addcompany', function(){
    return view('company.addcompany');
});
Route::post('/savecompany', 'CompanyController@insertcompany');

//routes for branches
Route::get('/branch', 'BranchController@index');
Route::get('/addbranch','BranchController@newbranch');
Route::post('/savebranch', 'BranchController@addbranch');


//routes for department
Route::get('/department', 'DepartmentController@index');
Route::get('/adddepartment','DepartmentController@newdepartment');
Route::post('/savedepartment', 'DepartmentController@adddepartment');


//routes for designation
Route::get('/designation', 'DesignationController@index');
Route::get('/adddesignation','DesignationController@newdesignation');
Route::post('/savedesignation', 'DesignationController@adddesignation');

