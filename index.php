<?php

error_reporting (E_PARSE);

ob_start();

$str = file_get_contents('https://enka.network/u/'.$_GET['uid']);

$pattern = '/\/ui\/.*\.png/';//需要转义/

preg_match($pattern,$str,$match);

$a1 = $match[0];
$a2 = str_replace('/ui/','',$a1);
$a3 = 'https://upload-bbs.mihoyo.com/game_record/genshin/character_side_icon/'.$a2;

echo $a3;

header("Location: $a3);
