<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 15:43
 */

$num = 1;
$str = "10 以内的偶数为: ";
while($num <= 10){
    if ($num%2 == 0){
        $str .= $num." ";
    }
    $num++;
}
echo $str;