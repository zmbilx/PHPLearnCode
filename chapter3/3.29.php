<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 12:44
 */

function come(){
    echo "来了<p>";
}

function go($name = "jack"){
    echo $name."走了<p>";
}

function back($string){
    echo "又回来了, $string<p>";
}

$func = "come";
$func();            // 调用come
$func = "go";
$func("Tom");       // 调用go
$func = "back";
$func("Lily");       // 调用back

