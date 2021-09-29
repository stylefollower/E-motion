<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use app\Http\Controllers\HomeController;

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

//routes search from KT
// Route::get('/', 'HomeController@showAll');
// Route::post('/create', 'HomeController@create');
// Route::get('/posts/{id}', 'HomeController@view');
// Route::delete('/posts/{id}', 'HomeController@delete');

// Route::get('/post', 'HomeController@search')->name('search');

// Route::get('/post', function () {
//     return view('postDetails');
// });

//Route::get('/test', 'HomeController@showAllPosts');
