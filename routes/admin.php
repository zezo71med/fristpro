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

//
//use Illuminate\Support\Facades\Route;
//Route::get('/gind','datacontroller@getindex');
//Route::get('/', function () {
////route
//return view('welcome');
//});
//route::get('/admin/hamed/{$id}', function () {
//    return 'hello word,$id';
//})->name('admin');
//Route::namespace('Front')->group(function () {
//
//    route::get('/new', 'usercontroller@showusername');
//});
////Route::get(['/home','namespace'=>'layout'],function (){
////    return view('home');
////});
////Route::namespace('layouts')->group(function(){
////    Route::get('/home1',function (){
////        return view('home');
////    }) ;
////});
////Route::prefix('/user')->group(function () {
////});
//Route::get('/ali{is}' ,function ($is){
//
//    return "your need edit $is";
//});
//Route::get('/booster',function (){
//
//     return view('booster');
//});
//
//route::group(['prefix'=>'user','namespace'=>'Front'/*'middleware'=>'auth'*/],function () {
//    Route::get('/show', [\App\Http\Controllers\Front\UserController::class, "showusername"]);
//    Route::get('update', "usercontroller@showusername");
//    Route::delete('delete', 'usercontroller@showusername');
//
//});
//Route::group(['prefix'=>'admin'],function (){
// Route::get('/','newcontroller@Newcontro0');
//Route::get('/login1','newcontroller@newcontro1');
//Route::get('/login2','newcontroller@newcontro2');
//Route::get('/login3',[\App\Http\Controllers\Newcontroller::class,'newcontro3']);
//});
////route::get('/login',function (){
////   return view('layouts.login');
//
////});
////route::ck->middleware('Front')
//
////Route::resource('news','recontroller');
