<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
// 	$people = ["Vishnu", "Sukhil","Asha", "Hakkim"];
//     return view('welcome',compact('people'));
// });


Route::get('/','PageController@home');

//My custom router

// Route::get('about', function(){
// 	// return 'HI this is about page';
// 	return view('pages.about'); //resources/views/about.blade.php
// });
 // about page router using PageController

Route::get('about','PageController@about');

Route::get('book/add','BookController@addnew');

Route::post('book/add/save','BookController@saveBook');

Route::get('book/list','BookController@listBooks');

Route::get('/','PageController@home');

Route::get('book/view/{book}', 'BookController@show_book');

Route::get('book/edit/{book}','BookController@book_edit');
Route::patch('book/update/{book}','BookController@book_upate');

Route::get('book/delete/{book}','BookController@book_delete');
Route::delete('book/erase/{book}','BookController@book_erase');
