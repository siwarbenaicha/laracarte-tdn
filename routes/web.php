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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function () {
//    return view('about');
//});

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]); // ou bien Route::name('home_path')->get('/','PagesController@home');

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);
