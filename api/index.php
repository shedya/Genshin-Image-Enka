<?php

$str = file_get_contents('https://enka.network/u/'.$_GET['uid']);
$str2 = '<img src="/ui/UI_AvatarIcon_Klee.png" alt="" class="svelte-qvi7br">';

$str1 = 'http://baidu.com';

$pattern = '/\/ui\/.*\.png/';//需要转义/

preg_match($pattern,$str,$match);

$a1 = $match[0];
$a2 = 'https://enka.network'.$a1;
echo $a2;

header("Location: https://enka.network".$a1);
