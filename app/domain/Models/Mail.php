<?php



class Mail extends Eloquent {

    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
    protected $table = "mails";
    protected $guarded = array();

    public function userMails(){
        return $this->hasMany('UserMail');
    }


}