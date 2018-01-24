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

# Method 1
Route::view("/", "pages/index")->name("home");
Route::view("about", "pages/about")->name("about");
Route::view("dashboard", "pages/dashboard")->name("dashboard");
Route::view("goals", "pages/goals")->name("goals");
Route::view("creategoals", "pages/creategoals")->name("creategoals") ;

# Method 2
// Route::get('about', function () {
// 	return view('pages/about');

// });


# Method 3

// Route::get('dashboard', 'PagesController@getDashboard');
// Route::get('about', 'PagesController@getAbout');
// Route::get('/', 'PagesController@getIndex');


// Route for controllers
Route::resource('posts', 'AccountController');
