<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 12:12
 */

$m = 8;
$n = 12;
$mn = $m & $n;      // λ��
echo $mn." ";
$mn = $m | $n;      // λ��
echo $mn." ";
$mn = $m ^ $n;      // λ���
echo $mn." ";
$mn = ~$m;
echo $mn." ";
