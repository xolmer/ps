<?php

define("DEFAULTDATEFORMAT", 'l jS \of F Y h:i A');
define("MYSQLFORMAT",'Y-m-d H:i:s');

function toJalali($timestamp=null,$format = null){

    require_once(__DIR__ . '/JalaliDate/jdatetime.class.php');
    if($timestamp == null){
        $timestamp = time();
    }
    if($format==null){
        $format = 'l j F Y ساعت H:i';
    }
    return jDateTime::date($format, $timestamp, true, true);
}



function country($countryID){
    $countryID = empty($countryID) ? 158 : $countryID;
    return DB::table('countries')->where('id', $countryID)->pluck('country_name');
}

function timezoneToCountry($timezone){
    switch($timezone){
        case 'Asia/Kuala_Lumpur':
            return Lang::get('words.countries.malaysia');
        case 'Asia/Tehran':
            return Lang::get('words.countries.iran');
    }
}