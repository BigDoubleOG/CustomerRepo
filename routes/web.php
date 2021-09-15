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

Route::view('/', 'home');
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get('customers', 'App\Http\Controllers\CustomersController@index');
Route::get('customersLazy', 'App\Http\Controllers\CustomersController@lazyIndex');
Route::get('customers/create', 'App\Http\Controllers\CustomersController@create');
Route::post('customers', 'App\Http\Controllers\CustomersController@store');



//use App\Http\Controllers\PageController;

//Route::get('/page', [PageController::class, 'index']);
// or
//Route::get('/page', 'App\Http\Controllers\PageController@index');

