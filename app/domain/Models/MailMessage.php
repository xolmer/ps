<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class MailMessage extends Eloquent {

    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
    protected $table = "mails";
    protected $guarded = array();

    public function receivers(){
        return $this->hasMany('UserMail','mail_id');
    }

    public function sender(){
        return $this->belongsTo('User','sender_id');
    }

    public function attachments(){
        return $this->hasMany('MailAttachment','mail_id');
    }


}