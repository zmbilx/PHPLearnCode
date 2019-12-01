<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 15:49
 */

$sum = 1;

for ($i=1; $i<=100; $i++){
    $sum *= $i;
}

echo "100! = $sum";