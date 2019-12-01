<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 12:37
 */

function values($price, $tax=0){
    $price = $price + ($price * $tax);
    echo "¼Û¸ñ : $price<br>";
}

values(100,0.25);
values(100);