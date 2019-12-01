<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 10:43
 */
$hr = '黄蓉';
function lxt(){
    $gj = "郭靖";
    echo $gj."<br>";
    global $hr;             //利用关健字global在函数内部定义全局变量
    echo $hr."<br>";
}

lxt();