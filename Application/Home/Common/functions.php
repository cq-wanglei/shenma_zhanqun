<?php
function ar_min(){
    $res = M('article')->field('min(id)')->find();
    return $res['min(id)'];
}

function ar_max(){
    $res = M('article')->field('max(id)')->find();
    return $res['max(id)'];
}


function randstr( $length = 8 ) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    for ( $i = 0; $i < $length; $i++ ) {
        $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];
    }
    return $password;
}


function mkcontent(){
    $min = M('juzi')->field('min(id) as min')->find();
    $max = M('juzi')->field('max(id) as max')->find();
    $count = rand(20,100);
    $all = '';
    for ($i = 0;$i < $count;$i++){
        $s = rand($min['min'],$max['max']);
        $res = M('juzi')->where('id = %d',$s)->field('content')->find();
        $all = $all . '<p>' .$res['content'] .'</p>' . "\n";
    }
    return $all;
}

function mkint($int = 6){
    $min = M('article')->field('min(id) as min')->find();
    $max = M('article')->field('max(id) as max')->find();
    $all = '';
    for ($i = 0;$i< $int ;$i++){
        $s = rand($min['min'],$max['max']);
        $res = M('article')->where('id = %d',$s)->field('id')->find();
        $all = $all . $res['id'].',';
    }
    return $all;
}

function showt($str,$img = false){
    $str_arr = explode(',',$str);
    $arr = array();
    foreach ($str_arr as $v){
        if(!empty($v)){
            if ($img){
                $s = M('article')->join('ci on article.ciid = ci.id')->where('article.id = %d',$v)->field('article.id,ci.tagname,article.img')->find();
            }else{
                $s = M('article')->join('ci on article.ciid = ci.id')->where('article.id = %d',$v)->field('article.id,ci.tagname')->find();
            }
            array_push($arr,$s);
        }
    }
    return $arr;
}


function checkrobot($useragent=''){
    static $kw_spiders = array('bot', 'crawl', 'spider' ,'slurp', 'sohu-search', 'lycos', 'robozilla');
    static $kw_browsers = array('msie', 'netscape', 'opera', 'konqueror', 'mozilla');

    $useragent = strtolower(empty($useragent) ? $_SERVER['HTTP_USER_AGENT'] : $useragent);
    if(strpos($useragent, 'http://') === false && dstrpos($useragent, $kw_browsers)) return false;
    if(dstrpos($useragent, $kw_spiders)) return true;
    return false;
}

function dstrpos($string, $arr, $returnvalue = false) {
    if(empty($string)) return false;
    foreach((array)$arr as $v) {
        if(strpos($string, $v) !== false) {
            $return = $returnvalue ? $v : true;
            return $return;
        }
    }
    return false;
}


