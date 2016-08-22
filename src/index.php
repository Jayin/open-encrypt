<?php


function encrypt(array $kv, $salt){
    $sign = '';
    $tmp = array();
    ksort($kv);
    foreach ($kv as $key => $value) {
        $tmp[] = $key . '=' . $value;
    }
    return md5(join('&', $tmp) . $salt);
}

function check_sign($kv, $salt, $sign){
    return encrypt($kv, $salt) === $sign;
}