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

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route::get('/portfolio','App\Http\Controllers\ProjectController@index')->name('projects.index');

Route::get('/portfolio/{project}/editar', 'App\Http\Controllers\ProjectController@edit')->name('projects.edit');
Route::patch('/portfolio/{project}', 'App\Http\Controllers\ProjectController@update')->name('projects.update');

Route::get('/portfolio/create', 'App\Http\Controllers\ProjectController@create')->name('projects.create');

Route::post('/portfolio','App\Http\Controllers\ProjectController@store')->name('projects.store');

Route::get('/portfolio/{project}', 'App\Http\Controllers\ProjectController@show')->name('projects.show');

Route::patch('/portafolio/{project}','App\Http\Controllers\ProjectController@destroy')->name('projects.destroy');

Route::view('/contact','contact')->name('contact');
Route::post('contact','App\Http\Controllers\MessageController@store')->name('messages.store');


