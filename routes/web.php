<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



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



// Route::get('/hello', function () {
//     return 'Hello World!';
// });

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'This is user '.$name.' with an id of '.$id;
// });

// Route::get('/', 'App\Http\Controllers\PagesController@index');
// Route::get('/about', 'App\Http\Controllers\PagesController@about');
// Route::get('/services', 'App\Http\Controllers\PagesController@services');

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
// Route::resource('posts', PostsController::class);

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/', function () {
//     return view('pages.index');
// });

// Route::get('/pages', [PagesController::class, 'index']);
// Route::get('/pages', [PagesController::class, 'about']);
// Route::get('/pages', [PagesController::class, 'services']);

// Route::get('/page', 'App\Http\Controllers\PagesController@index');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
