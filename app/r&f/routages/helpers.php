<?php
Route::group(array('prefix' => 'helpers'), function() {
   Route::get('banknames',array('as' => 'banknames','uses'=>'HelpersController@getBankNames'));
   Route::get('noscript', function() { return 'You landed on this page because JavaScript is disabled in your browser';});
   Route::get('test',function(){ return 'You are being tested';});

});