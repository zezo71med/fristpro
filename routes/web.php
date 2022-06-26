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

//Route::get('/home', function () {
//    return view('layouts.home');
//});
//Route::get('/login',function (){
//    return view('auth.login');
//});
//route::get('/hword/hamed',function(){
//
//   return "hello word" ;
//
//}) ->name ('s');
//
//route::get('/b','Front\UserController@booster');
//
//Route::prefix('/user')->group(function () {
//
//    Route::get('/show', 'usercontroller@showusername');
//
//});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function (){
    return view('welcome');
});
