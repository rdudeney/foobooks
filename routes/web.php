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

Route::get('/', 'WelcomeController');

Route::get('/books/{title}', 'BookController@show');
Route::get('/books', 'BookController@index');

/*
 * Pages
 * Simple, static pages without a lot of logic
 */
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::any('/practice/{n?}', 'PracticeController@index');

