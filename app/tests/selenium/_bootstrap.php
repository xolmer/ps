<?php
// Here you can initialize variables that will be available to your tests

function loginToParsian($I){
    $I->wantTo('Login to the system');
    $I->amOnPage('/');
    $I->submitForm('#vorood-form',array(
        'username' => 'saarang',
        'password' => '123456'
    ));

}