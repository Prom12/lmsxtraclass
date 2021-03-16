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


//FrontPage Views
Route::group(['namespace' => 'FrontPage'], function(){

	Route::get('/',function(){
        return view('frontPage.home');
    })->name('home');

	Route::get('/Ourtutors',function(){
        return view('frontPage/layouts/ourtutors');
    })->name('ourTutors');

	Route::get('/courses',function(){
    	return view('frontPage.layouts.courses');
    })->name('courses');

	Route::get('/contact', function(){
    	return view('frontPage.layouts.contact');
    })->name('contact');

	Route::get('/news', function(){
    	return view('frontPage.layouts.news');
    })->name('pricing');

});


//Admin views
Route::middleware('auth')->namespace('users')->prefix('Users')->name('users.')->group(function(){

	//home
	Route::resource('home','HomeController');
	//categories
 	Route::resource('categories','CategoriesController');
 	//my courses
 	Route::resource('my_courses','MyCoursesController');
 	//courses
 	Route::resource('courses','CoursesController');
 	//lessons
 	Route::resource('lessons','LessonsController');
 	//profile
 	Route::resource('profile', 'ProfileController');
 	//news
 	Route::resource('news', 'NewsController');
 	//settings
 	Route::resource('settings', 'SettingsController');
 	//users
 	Route::resource('users', 'UsersController');

});

Auth::routes();

