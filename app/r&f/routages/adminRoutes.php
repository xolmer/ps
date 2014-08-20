<?php



Route::group( array( 'prefix' => 'users', 'before' => 'auth' ), function () {

    Route::get( '/', array( 'as' => 'users.index', 'uses' => 'UsersController@index' ) );

    Route::get( 'createuser', array( 'as' => 'user.create', 'uses' => 'UsersController@create' ) );
    Route::post( 'createuser', array( 'as' => 'user.create', 'uses' => 'UsersController@store' ) );
    Route::get('edituser/{id}',array('as' => 'user.edit','uses'=>'UsersController@edit'));
    Route::post('edituser/{id}',array('as' => 'user.update','uses'=>'UsersController@update'));

    Route::get('createcustomer',array('as' => 'customer.create','uses'=>'CustomersController@create'));
    Route::post('createcustomer',array('as' => 'customer.store','uses' => 'CustomersController@store'));


} );


Route::get('profile',array('as' => 'profile','uses'=>'UsersController@showProfile'));