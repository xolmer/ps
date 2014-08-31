<?php



class Mail extends Eloquent {

    protected $table = "mails";
    
    protected $guarded = array();

    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];


    public function userMails(){
        return $this->hasMany('UserMails');
    }


}