<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 21:39
 */
$number = 1868.96;
echo number_format($number);        // 不保留小数点
echo "<br>";
echo number_format($number,2);      // 保留2位小数
echo "<br>";
$number2 = 11886655.760055;
echo number_format($number2,2,'.',','); //保留2位小点，然后第三个参数为小数点的那个.，第四个参数为千位的那个隔点。注意这两个都可以替换
