<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 15:56
 */

$arr = array();
$arr['h'] = "hello";
$arr['a'] = "apple";
$arr['b'] = "bbox";
$arr['c'] = "car";

foreach ($arr as $key=>$value){
    echo "$key=>$value<br>";
}