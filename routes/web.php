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

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/index', 'HonorController@index')->name('index');

Route::get('/home/jenishr', 'JenishrController@index')->name('jenishr.index');
Route::get('/home/jenishr/create', 'JenishrController@create')->middleware('auth','admin')->name('jenishr.create');
Route::post('/home/jenishr/store', 'JenishrController@store')->middleware('auth','admin')->name('jenishr.store');
Route::get('home/jenishr/destroy/{data}', 'JenishrController@destroy')->middleware('auth','admin')->name('jenishr.destroy');
Route::get('/home/jenishr/edit/{data}', 'JenishrController@edit')->middleware('auth','admin')->name('jenishr.edit');
Route::patch('/home/jenishr/update/{data}', 'JenishrController@update')->middleware('auth','admin')->name('jenishr.update');

Route::get('/home/staff', 'StaffController@index')->name('staff.index');
Route::get('/home/staff/create', 'StaffController@create')->middleware('auth','admin')->name('staff.create');
Route::post('/home/staff/store', 'StaffController@store')->middleware('auth','admin')->name('staff.store');
Route::get('/home/staff/destroy/{data}', 'StaffController@destroy')->middleware('auth','admin')->name('staff.destroy');
Route::get('/home/staff/edit/{data}', 'StaffController@edit')->middleware('auth','admin')->name('staff.edit');
Route::patch('/home/staff/update/{data}', "StaffController@update")->middleware('auth','admin')->name('staff.update');


Route::get('/home/hr', 'HrController@index')->name('hr.index');
Route::get('/home/hr/create', 'HrController@create')->middleware('auth','admin')->name('hr.create');
Route::post('/home/hr/store', 'HrController@store')->middleware('auth','admin')->name('hr.store');
Route::get('/home/hr/destroy/{data}', 'HrController@destroy')->middleware('auth','admin')->name('hr.destroy');
Route::get('/home/hr/edit/{data}', "HrController@edit")->middleware('auth','admin')->name('hr.edit');
Route::patch('/home/hr/update/{data}', 'HrController@update')->middleware('auth','admin')->name('hr.update');
Route::get('/home/hr/cari', 'HrController@cari')->name('cari');
Route::get('/home/hr/cetak_pdf', 'HrController@cetak_pdf')->middleware('auth','admin')->name('pdf');

Route::get('/home/user', 'UserController@index')->middleware('auth','admin')->name('user.index');
Route::get('/home/user/edit/{data}', 'UserController@edit')->middleware('auth','admin')->name('u.edit');
Route::patch('/home/user/update/{data}', 'UserController@update')->middleware('auth','admin')->name('user.update');
