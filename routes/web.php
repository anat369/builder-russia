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

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::post('/order', 'HomeController@order')->name('order');

Route::get('/login', 'AuthController@loginForm')->name('loginForm');
Route::post('/login', 'AuthController@login');

Route::get('/service', 'ServiceController@index');
Route::get('/service/{slug}', 'ServiceController@showService')->name('service.show');

Route::get('/project', 'ProjectController@index');
Route::get('/project/{slug}', 'ProjectController@showProject')->name('project.show');

Route::get('/contact', 'ContactController@index');
Route::post('/contactForm', 'ContactController@contactForm')->name('contactForm');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function() {
    Route::get('/', 'DashboardController@index');
    Route::resource('/service', 'ServiceController', ['as' => 'admin']);
    Route::resource('/project', 'ProjectController', ['as' => 'admin']);
    Route::resource('/message', 'MessageController', ['as' => 'admin']);
    Route::resource('/organization', 'OrganizationController', ['as' => 'admin']);
    Route::resource('/order', 'OrderController', ['as' => 'admin']);
});
