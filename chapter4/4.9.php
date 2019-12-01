<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 15:59
 */

while(true){
    $tmp = rand(1,20);
    echo $tmp." ";
    if ($tmp == 10){
        echo "<p>变量等于10，终止循环</p>";
        break;
    }
}