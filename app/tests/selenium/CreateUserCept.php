<?php

$I = new SeleniumTester($scenario);
loginToParsian($I);
$I->wantTo('Create a new user and see it in database');


$I->amOnPage('/users/createuser');
$fn = 'Amir';
$ln = 'Doe';
$I->fillField('first_name', $fn );
$I->fillField('last_name', '' . $ln . '' );
$I->fillField('username','testuser');
$I->fillField('password','123456');
$I->fillField('password_confirmation','123456');
$I->fillField('email_address','test@testuser.com');
$I->fillField('mobile_number','60142239204');
$I->selectOption('country_of_residence','Iran');
$I->uncheckOption('#is_active');
$I->selectOption('timezone','Asia/Tehran');
$I->canSeeLink(Lang::get('ui.buttons.create_user'));
$I->click('input[value="' .  Lang::get('ui.buttons.create_user') . '"]');
$I->see($fn,'.alert-success');
$I->seeInDatabase('users',array('first_name' => $fn, 'last_name' => $ln));