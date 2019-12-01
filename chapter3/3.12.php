<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 10:22
 */
$i = "mingribook";
$j = &$i;               //使用引用赋值
$i = "mrbccd";
echo $j;
echo '<br>';
echo $i;