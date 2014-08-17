<?php
/**
 * BaseValidator.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/28/14 1:22 PM
 */

namespace SaarangSlt\Validators;


class BaseValidator extends \Laracasts\Validation\FormValidator{

    protected $updateRules = array();
    protected $updateMessages = array();

    public function validateUpdate($formData)
    {
        $formData = $this->normalizeFormData($formData);

        $this->validation = $this->validator->make(
            $formData,
            $this->getUpdateValidationRules(),
            $this->getUpdateValidationMessages()
        );

        if ($this->validation->fails())
        {
            throw new \Laracasts\Validation\FormValidationException('Validation failed', $this->getValidationErrors());
        }

        return true;
    }

    public function getUpdateValidationRules(){
        return empty($this->updateRules) ? $this->rules : $this->updateRules;
    }

    public function getUpdateValidationMessages(){
        return empty($this->updateMessages) ? $this->messages : $this->updateMessages;
    }

} 