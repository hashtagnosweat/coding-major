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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');
Route::get('/details/{id}', 'DetailController@index')->name('detail');
Route::get('/course', 'CourseController@index')->name('course');
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Route::group(['middleware' => ['auth']], function () {

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/class', 'DashboardClassController@index')->name('dashboard-class');
Route::get('/dashboard/class/{id}', 'DashboardClassController@details')->name('dashboard-class-details');

Route::get('/dashboard/account', 'DashboardSettingController@account')->name('dashboard-settings-account');
Route::post('/dashboard/account/{redirect}', 'DashboardSettingController@update')->name('dashboard-settings-redirect');


});
// ->middleware(['auth', 'admin'])

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('course', 'CourseController');
        Route::resource('course-gallery', 'CourseGalleryController');
    });

Auth::routes();


