<?php 

require __DIR__ . '/../src/index.php';

//期望值： 26e1779686174c502715a03f4681c4f4
$kv = [
    'name' => 'jayin',
    'value' => '1'
];
$salt = 'China';

echo check_sign($kv, $salt, '26e1779686174c502715a03f4681c4f4');

