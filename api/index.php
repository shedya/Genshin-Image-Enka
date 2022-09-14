<?php

error_reporting (E_PARSE);

ob_start();

$str = file_get_contents('https://enka.network/u/'.$_GET['uid']);

$pattern = '/\/ui\/.*\.png/';//需要转义/

preg_match($pattern,$str,$match);

$a1 = $match[0];
$a2 = 'https://enka.network'.$a1;
echo $a2;

header("Location: https://enka.network".$a1);
