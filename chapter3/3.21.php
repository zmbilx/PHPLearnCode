<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 12:20
 */

$i = true;
$j = true;
$z = false;

if ($i or $j and $z){
    echo "True";
}else{
    echo "False";
}
echo "<br>";
// ע�����ȼ� || >  and > or
if ($i || $j and $z) {
    echo "True";
}else{
    echo "False";
}
