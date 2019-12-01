<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 21:37
 */
$str = "用今日的辛勤工作，换明日的双倍回报.";
$replace = "百倍";
echo substr_replace($str,$replace,26,4);