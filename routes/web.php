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

Route::get('/', 'App\Http\Controllers\Frontend\Settings\UserController@index')->name('home');

Route::prefix('cms')->group(function () {
    Route::get('/', 'App\Http\Controllers\Backend\Settings\UserController@index')->name('login');
    Route::get('/login', 'App\Http\Controllers\Backend\Settings\UserController@login')->name('login-with-params');
    Route::post('/authentification', 'App\Http\Controllers\Backend\Settings\UserController@authentification')->name('authentification');
    Route::get('/logout', 'App\Http\Controllers\Backend\Settings\UserController@logout')->name('logout');
    Route::get('/dashboard', 'App\Http\Controllers\Backend\Settings\UserController@dashboard')->name('dashboard');

    //user cms start here
    Route::get('/users/view', 'App\Http\Controllers\Backend\Master\UserController@view')->name('view-user');
    Route::post('/users/add', 'App\Http\Controllers\Backend\Master\UserController@add')->name('add-user');
    Route::get('/users/add', 'App\Http\Controllers\Backend\Master\UserController@add')->name('add-user');
    Route::get('/users/edit/{id}', 'App\Http\Controllers\Backend\Master\UserController@edit')->name('add-user');
    Route::post('/users/update/{id}', 'App\Http\Controllers\Backend\Master\UserController@update')->name('update-user');
    Route::get('/users/delete/{id}', 'App\Http\Controllers\Backend\Master\UserController@delete')->name('delete-user');
    
    
    //books cms start here
    Route::get('/books/view', 'App\Http\Controllers\Backend\Master\BooksController@view')->name('view-books');
    Route::post('/books/add', 'App\Http\Controllers\Backend\Master\BooksController@add')->name('add-books');
    Route::get('/books/add', 'App\Http\Controllers\Backend\Master\BooksController@add')->name('add-books');
    Route::get('/books/detail/{id}', 'App\Http\Controllers\Backend\Master\BooksController@detail')->name('detail-books');
    Route::get('/books/creator/{id}', 'App\Http\Controllers\Backend\Master\BooksController@creator')->name('creator-books');
    Route::get('/books/edit/{id}', 'App\Http\Controllers\Backend\Master\BooksController@edit')->name('edit-books');
    Route::get('/books/error_add_books', 'App\Http\Controllers\Backend\Master\BooksController@error_add_books')->name('error-add-books');
    Route::post('/books/update/{id}', 'App\Http\Controllers\Backend\Master\BooksController@update')->name('update-books');
    Route::get('/books/error_update_books', 'App\Http\Controllers\Backend\Master\BooksController@error_update_books')->name('error-update-books');
    Route::get('/books/delete/{id}', 'App\Http\Controllers\Backend\Master\BooksController@delete')->name('delete-books');
    //books cms end here
    
      
    //creators cms start here
    Route::get('/creator/view', 'App\Http\Controllers\Backend\Master\CreatorController@view')->name('view-creator');
    Route::post('/creator/add', 'App\Http\Controllers\Backend\Master\CreatorController@add')->name('add-creator');
    Route::get('/creator/add', 'App\Http\Controllers\Backend\Master\CreatorController@add')->name('add-creator');
    Route::get('/creator/detail/{id}', 'App\Http\Controllers\Backend\Master\CreatorController@detail')->name('detail-creator');
    Route::get('/creator/edit/{id}', 'App\Http\Controllers\Backend\Master\CreatorController@edit')->name('edit-creator');
    Route::get('/creator/error_add_creator', 'App\Http\Controllers\Backend\Master\CreatorController@error_add_creator')->name('error-add-creator');
    Route::post('/creator/update/{id}', 'App\Http\Controllers\Backend\Master\CreatorController@update')->name('update-creator');
    Route::get('/creator/error_update_creator', 'App\Http\Controllers\Backend\Master\CreatorController@error_update_creator')->name('error-update-creator');
    Route::get('/creator/delete/{id}', 'App\Http\Controllers\Backend\Master\CreatorController@delete')->name('delete-creator');
    //creators cms end here
});

Route::get('/flush-session', function(Request $request) {
    $request->session()->flush();
    $request->session()->save();
});
