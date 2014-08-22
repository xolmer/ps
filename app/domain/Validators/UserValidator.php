<?php namespace SaarangSlt\Validators;

use Laracasts\Validation\FormValidator as Validator;

class UserValidator extends BaseValidator {

    protected $rules = array(
        'first_name' => 'required',
        'last_name' => 'required',
        'username' => 'required|unique:users',
        'password' => 'required|min:6|confirmed',
        'email_address' => 'email',
        'mobile_number' => 'required',
        'country_of_residence' => 'required',
        'timezone' => 'timezone'
    );

    protected $messages = array(
        'first_name.required' => 'نام کاربر اجباری است',
        'last_name.required' => 'نام خانوادگی کاربر اجباری است',
        'username.required' => 'نام کاربری اجباری است',
        'username.unique' => 'این نام کاربری قبلا به کاربری دیگر اختصاص داده شده است',
        'password.required' => 'کلمه عبور اجباری است',
        'password.min' => 'کلمه عبور حداقل باید شش حرف باشد',
        'password.confirmed' => 'کلمه عبور برای تایید باید مجددا وارد شود',
        'mobile_number.required' => 'شماره تماس کاربر اجباری است',
        'country_of_residence.required' => 'کشور محل سکونت کاربر اجباری است',
        'timezone' => 'منطقه زمانی وارد شده صحیح نمی باشد'
    );


    protected $updateRules = array(
        'first_name' => 'required',
        'last_name' => 'required',
        'password' => 'sometimes|required|min:6|confirmed',
        'email_address' => 'email',
        'mobile_number' => 'required',
        'country_of_residence' => 'required',
        'timezone' => 'timezone'
    );

    protected  $updateMessages = array();

}