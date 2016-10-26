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

Auth::routes();

// Additional GET logout
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->middleware('auth');

Route::get('/', function () {
    return view('app');
})->middleware('auth');

// Auth
Route::post('api/auth/login', 'API\LoginController');
Route::post('api/auth/register', 'API\RegisterController');
Route::get('api/auth/self', 'API\AuthController@self');
Route::post('api/auth/logout', 'API\AuthController@logout');

// Todo
Route::resource('api/todos', 'TodosController', array('except' => array('create', 'edit')));
Route::delete('api/todos', 'TodosController@removeAll');
