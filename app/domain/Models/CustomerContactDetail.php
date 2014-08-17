<?php


class CUstomerContactDetail extends Eloquent {

    protected $table = 'customer_contact_details';
    
    protected $guarded = array();
    
    
    public function customer(){
        return $this->belongsTo('Customer','customer_id');
    }
    
     public function country(){
        return $this->belongsTo('Country','country_id');
    }

}