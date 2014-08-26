<?php namespace SaarangSlt\Validators;


class PasswordUpdateValidator extends BaseValidator
{


    protected $rules = array(
        'password' => 'required|min:6|confirmed',
    );

    protected $messages = array(
        'password.required' => 'کلمه عبور اجباری است',
        'password.min' => 'کلمه عبور حداقل باید شش حرف باشد',
        'password.confirmed' => 'کلمه عبور برای تایید باید مجددا وارد شود',
        'current_password.required' => 'کلمه عبور کنونی اجباری است',
        'current_password.current_password_is_correct' => 'کلمه عبور کنونی اشتباه است',

    );


    protected $updateRules = array();

    protected $updateMessages = array();



    public function validateCurrentUserPasswordUpdate($formData)
    {
        $formData = $this->normalizeFormData($formData);

        $this->validation = $this->validator->make(
            $formData,
            $this->getValidationRules() + array('current_password' => 'required|current_password_is_correct'),
            $this->getValidationMessages()
        );

        if ($this->validation->fails())
        {
            throw new \Laracasts\Validation\FormValidationException('Validation failed', $this->getValidationErrors());
        }

        return true;
    }

}
