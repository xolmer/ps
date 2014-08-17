<?


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