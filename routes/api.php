<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Model\User\courses;
use App\Model\User\categories;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',function(){
    return courses::all();
});


Route::get('/courses',function(){
    return categories::all();
})->name('courses');

//FrontPage Views
Route::group(['namespace' => 'FrontPage'], function(){

	Route::get('/',function(){
        $courses = courses::all();
    return view('frontPage.home',compact('courses'));
    })->name('home');

	Route::get('/Ourtutors',function(){
        return view('frontPage/layouts/ourtutors');
    })->name('ourTutors');

	Route::get('/courses',function(){
        $courses = courses::all();
        $categories = categories::all();
    	return view('frontPage.layouts.courses',compact('courses','categories'));
    })->name('courses');

	Route::get('/contact', function(){
    	return view('frontPage.layouts.contact');
    })->name('contact');

	Route::get('/news', function(){
    	return view('frontPage.layouts.news');
    })->name('pricing');

});
//home
Route::resource('hom','HomeController');

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
