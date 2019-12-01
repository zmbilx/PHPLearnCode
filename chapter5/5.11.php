<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 21:07
 */

$str1 = "明日编程词典!!";
$str2 = "明日编程词典!!";
$str3 = "mrsoft";
$str4 = "MRSOFT";
echo strcmp($str1,$str2);
echo strcmp($str3,$str4);           // 该函数区分大小写
echo strcasecmp($str3, $str4);      // 该函数不区分大小

