<?php

Validator::extend('current_password_is_correct', function($attribute, $value, $parameters)
{
    return \Hash::check($value, Auth::user()->password);
});