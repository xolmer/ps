<?php

require('adminRoutes.php');
require('helpers.php');


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| Here is where you we register all of the routes which are accessible to
| everyone
*/



Route::get( '/', array('as' => 'index','uses' => 'AuthController@index'));
Route::any('login', array('as' => 'signin', 'uses' => 'AuthController@authenticate'));
Route::get('logout',array('as' => 'logout' , 'uses' => 'AuthController@logout'));