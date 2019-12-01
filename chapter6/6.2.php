<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 22:40
 */
$str = 'This is an example!';
$preg = '/\b\w{2}\b/';
$num1 = preg_match($preg,$str,$str1);
echo $num1.'<br>';
var_dump($str1);
echo '<br>';

$num2 = preg_match_all($preg, $str, $str2);
echo $num2.'<br>';
var_dump($str2);