<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 15:28
 */

$num = rand(1,31);
if ($num%2 == 0){
    echo "变量$num 是偶数.";
}else{
    echo  "变量$num 是奇数.";
}