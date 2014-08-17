<?php




class CustomerAddress extends Eloquent {

    protected $table = 'customer_addresses';
    
    protected $guarded = array();
    
    
    public function customer(){
        return $this->belongsTo('Customer','customer_id');
    }
    
    public function country(){
        return $this->belongsTo('Country','country_id');
    }

}