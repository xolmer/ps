<?php namespace SaarangSlt\Validators;

use Laracasts\Validation\FormValidator as Validator;

class MoneyChangerValidator extends BaseValidator {

    protected $rules = array(
        'name' => 'required',
        'director_name' => 'required',
        'director_last_name' => 'required',
        'email_address' => 'email',
        'phone_number' => 'required',
        'country_id' => 'required',
        
    );

    protected $messages = array(
        'name.required' => 'نام صرافی اجباری است',
        'director_name.required' => 'نام مدیر اجباری است',
        'director_last_name.required' => 'نام خانوادگی  مدیر اجباری است',
        'phone_number.required' => 'شماره تماس  اجباری است',
        'country_id.required' => 'کشور صرافی  اجباری است',
        'email_address.email' => 'فرمت آدرس ایمیل صحیح نمی باشد',

    );


    protected $updateRules = array(
       
    );

    protected  $updateMessages = array();

}