<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 12:44
 */

function come(){
    echo "����<p>";
}

function go($name = "jack"){
    echo $name."����<p>";
}

function back($string){
    echo "�ֻ�����, $string<p>";
}

$func = "come";
$func();            // ����come
$func = "go";
$func("Tom");       // ����go
$func = "back";
$func("Lily");       // ����back

