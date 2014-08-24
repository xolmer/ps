<?php


function toJalali($timestamp=null,$format = null){

    require(__DIR__ . '/JalaliDate/jdatetime.class.php');
    if($timestamp == null){
        $timestamp = time();
    }
    if($format==null){
        $format = 'l j F Y ساعت H:i';
    }
    return jDateTime::date($format, $timestamp, true, true, 'Asia/Tehran');
}

function country($countryID){
    $countryID = empty($countryID) ? 158 : $countryID;
    return DB::table('countries')->where('id', $countryID)->pluck('country_name');
}