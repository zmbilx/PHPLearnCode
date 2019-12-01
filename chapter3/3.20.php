<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 12:12
 */

$m = 8;
$n = 12;
$mn = $m & $n;      // 位与
echo $mn." ";
$mn = $m | $n;      // 位或
echo $mn." ";
$mn = $m ^ $n;      // 位异或
echo $mn." ";
$mn = ~$m;
echo $mn." ";
