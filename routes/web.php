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

Route::get('/', function () {
    return view('welcome');
});

// localhost:8000/books
Route::prefix('books')->group(function ()
{
    Route::get('/', 'BookController@index')->name('book.index');
    Route::get('/create', 'BookController@create')->name('book.create');
    Route::get('/edit/{id}', 'BookController@edit')->name('book.edit');
    Route::get('/{id}', 'BookController@show')->name('book.show');
    Route::post('/store', 'BookController@store')->name('book.store');
    Route::put('/update/{id}', 'BookController@update')->name('book.update');
    Route::delete('/{id}', 'BookController@destroy')->name('book.destroy');
});