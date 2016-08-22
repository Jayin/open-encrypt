<?php

/**
 * 签名 
 */
function sign(array $kv, $salt){
    $sign = '';
    $tmp = array();
    ksort($kv);
    foreach ($kv as $key => $value) {
        $tmp[] = $key . '=' . $value;
    }
    return md5(join('&', $tmp) . $salt);
}

//校验签名
function check_sign($kv, $salt, $sign){
    return sign($kv, $salt) === $sign;
}