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

Route::resource('/','SessionControoller');
Route::resource('/test','SessionControllerTest');
Route::resource('post','PostController');

Route::resource('app', 'AppController');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => ['api','cors'],'prefix' => 'api'], function () {
//
//     Route::post('register', 'APIController@register');
//
//     Route::post('login', 'APIController@login');
//
//     Route::group(['middleware' => 'jwt-auth'], function () {
//
//     	Route::post('get_user_details', 'APIController@get_user_details');
//
//     });
//
// });

// Route::post('register', 'AuthController@register');
// Route::post('login', 'AuthController@login');
// Route::post('recover', 'AuthController@recover');
//
// Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
// Route::post('password/reset', 'Auth\PasswordController@reset');


Route::get('category',function(){
  if(Request::ajax()){
    return 'very cool its about request ajax';
  }
});

Route::post('register',function(){
  if(Request::ajax()){
    return Response::json(Request::all());
  }
});




Route::get('ajax','AjaxController@index')->name('ajax');
Route::get('read','AjaxController@readbyAjax')->name('read');
Route::post('ajax/meher','AjaxController@ajax1')->name('Ajax');
Route::post('deletebyAjax','AjaxController@deletebyAjax')->name('deletebyAjax');
Route::get('updatebyAjax','AjaxController@updatebyAjax')->name('updatebyAjax');
Route::post('update','AjaxController@update')->name('update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
