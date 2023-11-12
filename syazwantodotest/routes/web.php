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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/facebook', 'App\Http\Controllers\SocialController@facebookRedirect');
Route::get('auth/facebook/callback', 'App\Http\Controllers\SocialController@loginWithFacebook');

Route::get('auth/google', 'App\Http\Controllers\SocialController@googleRedirect');
Route::get('auth/google/callback', 'App\Http\Controllers\SocialController@loginWithGoogle');

Route::get('auth/github', 'App\Http\Controllers\SocialController@githubRedirect');
Route::get('auth/github/callback', 'App\Http\Controllers\SocialController@loginWithGitHub');



Route::get('todos/index', 'App\Http\Controllers\TodoController@index')->name('todos.index');
Route::get('todos/create', 'App\Http\Controllers\TodoController@create')->name('todos.create');
Route::post('todos/store', 'App\Http\Controllers\TodoController@store')->name('todos.store');
// Route::post('/todo/create', 'TodoController@store')->name('todo.store');
Route::get('todos/edit/{id}', 'App\Http\Controllers\TodoController@edit')->name('todos.edit');
Route::get('todos/view/{id}', 'App\Http\Controllers\TodoController@view')->name('todos.view');
Route::put('todos/update', 'App\Http\Controllers\TodoController@update')->name('todos.update');
Route::delete('todos/delete', 'App\Http\Controllers\TodoController@delete')->name('todos.delete');

