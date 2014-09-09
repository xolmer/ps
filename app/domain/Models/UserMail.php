<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;


class UserMail extends Eloquent {

    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
    protected $table = "user_mails";

    protected $guarded = array();


    public function mail(){
        return $this->belongsTo('Mail');
    }

    

}