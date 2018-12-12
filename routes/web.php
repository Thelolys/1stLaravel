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

//Route::get('/hello', function () {
////    return view('welcome');
//    return '<h1>Hello world</h1>';
//});

//Route::get('/about', function (){
//    return view('pages.about');
//});
//Unikals ID
//Route::get('/users/{name}/{id}', function($name,$id){
//    return 'This is user ' .$name.' with an id '.$id;
//});


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
//Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('/edituser', 'UserController@edit')->name('useredit');
Route::resource('user','UserController');


//Route::get('/admin', 'AdminController@edit')->name('admin');
//Route::resource('user','AdminController');

Route::resource('admin','AdminController');
Route::get('/admin', 'AdminController@index')
        ->middleware('is_admin')
        ->name('admin');


Route::resource('reservations','AdminReservationController');
Route::get('/reservations', 'AdminReservationController@index')
    ->middleware('is_admin')
    ->name('reservations');
Route::get('/approve/{id}', 'AdminReservationController@approve');
Route::get('/dissapprove/{id}', 'AdminReservationController@dissapprove');
