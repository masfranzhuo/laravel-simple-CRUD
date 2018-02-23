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

/*Route::get('/', function () {
    return view('books/layout');
});*/
Route::get('/', 'BookController@index')->name('book');
Route::post('/create', 'BookController@create')->name('create');
Route::get('/updateform/{id}', 'BookController@update_form')->name('updateform');
Route::get('/update/{id}', 'BookController@update')->name('update');
Route::get('/delete/{id}', 'BookController@delete')->name('delete');
