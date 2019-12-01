<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 21:11
 */

$str1 = "str2.jpg";
$str2 = "str10.jpg";
$str3 = "mrsoft";
$str4 = "MRSOFT";

echo strcmp($str1,$str2);           // 按字节比较，返回1
echo " ";
echo strcmp($str3,$str4);           // 按字节比较，返回1 小写的ascll码0比大写字母的ASCII码大
echo " ";
// 这个是按照自然排序法，如果为数字，则按照数字大小进行比较
// 如果是其他情况，则按ascii码比较
echo strnatcmp($str1,$str2);        // 返回 -1
echo " ";
echo strnatcmp($str3,$str4);        // 返回 1



