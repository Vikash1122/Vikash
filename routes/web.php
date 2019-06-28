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

Route::get('/home', 'HomeController@index')->name('home');
  
    Route::prefix('admin')->group(function() {
      Route::get('/login',
       'Auth\AdminLoginController@showLoginForm')->name('admin.login');
      Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
      Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
      Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
      Route::resource('roles','Admin\RoleController');
      Route::resource('users','Admin\UserController');
    });

     
  Route::prefix('doctor')->group(function() {
   Route::get('/login',
   'Auth\DoctorLoginController@showLoginForm')->name('doctor.login');
   Route::post('/login', 'Auth\DoctorLoginController@login')->name('doctor.login.submit');
   Route::get('logout/', 'Auth\DoctorLoginController@logout')->name('doctor.logout');
    Route::get('/', 'DoctorController@index')->name('doctor.dashboard');
  }); 

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles','RoleController');
//     Route::resource('users','UserController');
//     Route::resource('products','ProductController');
// });