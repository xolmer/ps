<?php

Route::group(array('before' => 'auth'), function () {


    Route::group(array('prefix' => 'users'), function () {

        Route::get('/', array('as' => 'users.index', 'uses' => 'UsersController@index'));

        Route::get('createuser', array('as' => 'user.create', 'uses' => 'UsersController@create'));
        Route::post('createuser', array('as' => 'user.create', 'uses' => 'UsersController@store'));

        Route::get('edituser/{id}', array('as' => 'user.edit', 'uses' => 'UsersController@edit'));
        Route::post('edituser/{id}', array('as' => 'user.update', 'uses' => 'UsersController@update'));


    });


    Route::group(array('prefix' => 'customers'), function () {

        Route::get('createcustomer', array('as' => 'customer.create', 'uses' => 'CustomersController@create'));
        Route::post('createcustomer', array('as' => 'customer.store', 'uses' => 'CustomersController@store'));

    });

    Route::group(['prefix' => 'mails'], function () {
        Route::get('inbox', ['as' => 'mail.inbox', 'uses' => 'MailsController@showInbox']);
        Route::get('sentbox', ['as' => 'mail.sentbox', 'uses' => 'MailsController@showSentbox']);
        Route::get('compose', ['as' => 'mail.compose', 'uses' => 'MailsController@showCompose']);
        Route::post('compose', ['as' => 'mail.compose', 'uses' => 'MailsController@postCompose']);
        Route::get('trash', ['as' => 'mail.trash', 'uses' => 'MailsController@showTrash']);
        Route::get('test', function () {
            return View::make('mails.compose');
        });
    });

    Route::group(['prefix' => 'todos'], function () {
        Route::post('create',['as' => 'todos.create','uses' => 'TodosController@postCreate']);
        Route::post('check',['as' => 'todos.check','uses' => 'TodosController@postCheck']);
        Route::get('delete',['as' => 'todos.delete','uses' => 'TodosController@delete']);

    });


    Route::get('profile', array('as' => 'profile', 'uses' => 'UserController@showProfile'));
    Route::post('changeavatar', array('as' => 'user.updateAvatar', 'uses' => 'UserController@updateAvatar'));
    Route::post('removeavatar', array('as' => 'user.removeAvatar', 'uses' => 'UserController@removeAvatar'));
    Route::post('updatepassword', array('as' => 'user.updatePassword', 'uses' => 'UserController@updateCurrentUserPassword'));


});