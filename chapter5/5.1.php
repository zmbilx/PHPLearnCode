<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 18:14
 */
$str="\r\r(:@@ 这是一个测试字符串 @_@:)";
echo $str."<br>";
echo trim($str)."<br>";            // 去除字符串左右两边空格
echo "<br>";
echo trim($str,"\r\r(::)");         // 去除字符串左右两边的特殊字符

