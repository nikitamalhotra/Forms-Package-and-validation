<?php
use App\User;
use App\Address;
use App\Role;

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

//Route::get('/create', 'PostsController@create' );
//Route::post('/postss', 'PostsController@store' );

Route::group(['middleware'=>'web'], function(){
	Route::resource('/posts', 'PostsController');
});


