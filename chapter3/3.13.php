<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 10:28
 */

$example = "在......函数外";

function example(){
    $example = "在.....函数内";
    echo "在函数内输出的内容是:".$example."<br>";
}

example();
echo "在函数外输出的内容是：".$example."<br>";