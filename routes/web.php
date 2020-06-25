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


Route::get('/', 'PagesController@getHome')->name('home');
Route::get('/about', 'PagesController@getAbout')->name('about');
Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::get('/projects', 'PagesController@getProjects')->name('projects');
Route::post('/contact/submit', 'MessagesController@submit');
Route::get('/messages', 'MessagesController@getMessages')->name('messages');
Route::resource('announcement', 'AnnouncementsController');
Route::resource('user', 'UsersController');
Route::resource('cv', 'CvController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/messages/{id}', 'MessagesController@getUserMessages')->name('getMessages');

