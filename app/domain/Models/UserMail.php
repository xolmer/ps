<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;


class UserMail extends Eloquent {

    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
    protected $table = "user_mails";

    protected $guarded = array();


    public function mail(){
        return $this->belongsTo('MailMessage');
    }

    public function getSubjectAttribute(){
        return $this->mail->subject;
    }

    public function getBodyAttribute()
    {
        return $this->mail->body;
    }

    public function getPriorityAttribute(){
        return $this->mail->priority;
    }
    public function getGistAttribute(){
        return Str::limit($this->body);
    }

    public function getSenderAttribute(){
        return $this->mail->sender;
    }

    public function getSenderNameAttribute(){
        return $this->sender->full_name;
    }

    

}