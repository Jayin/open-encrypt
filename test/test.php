<?php 

require __DIR__ . '/../src/index.php';

//期望值： 26e1779686174c502715a03f4681c4f4
$kv = [
    'name' => 'jayin',
    'value' => '1'
];
$salt = 'China';

echo check_sign($kv, $salt, '26e1779686174c502715a03f4681c4f4');



//期望值： fca6a86649078bffafd68f6672dbab6f
echo "\r\n";

$kv = [
    'appid' => '111',
    'name' => 'XXX'
];
$salt = 'ZZZ';

echo check_sign($kv, $salt, 'fca6a86649078bffafd68f6672dbab6f');

