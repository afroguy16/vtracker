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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/about', 'PagesController@about');

Route::get('/admindetails', 'AdminController@index');

Route::get('/adminhistory', 'AdminController@history');

Route::post('/adminhistory', 'AdminController@history');

Route::get('/editadmin', 'AdminController@editadmin');

Route::get('/addadmin', 'AdminController@addadmin');

Route::get('/userdetails/{id}', 'VisitorsController@index');

Route::get('/userhistory/{id}', 'VisitorsController@visitorhistory');

Route::post('/searchvisitor', 'VisitorsController@searchvisitors');

Route::get('/browseusers', 'VisitorsController@browseusers');

Route::get('/visitlogin/{id}', 'VisitorsController@showVisitor');

Route::post('/visitlogin', 'VisitorsController@createhistory');

Route::get('/edituser', 'VisitorsController@edituser');

Route::get('/newvisitor', 'VisitorsController@newvisitor');

Route::post('/addvisitor', 'VisitorsController@create');

Route::put('/logout/{id}', 'VisitorsController@logoutvisitor');

Route::get('/logout/{id}', 'VisitorsController@logoutvisitorpage');