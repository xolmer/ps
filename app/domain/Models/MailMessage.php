<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class MailMessage extends Eloquent {

    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
    protected $table = "mails";
    protected $guarded = array();

    public function receivers(){
        return $this->hasMany('UserMail','receiver_id');
    }


}