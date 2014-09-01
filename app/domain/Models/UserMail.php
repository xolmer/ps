<?php



class UserMail extends Eloquent {

    protected $table = "user_mails";
    
    protected $guarded = array();

    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];

    public function mail(){
        return $this->belongsTo('Mail');
    }

    

}