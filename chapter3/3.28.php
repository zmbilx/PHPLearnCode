<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 12:42
 */

function values($price, $weight=0.45){
    $price = $price + ($price * $weight);
    return $price;
}

echo values(100);