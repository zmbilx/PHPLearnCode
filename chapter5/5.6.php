<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 18:52
 */
$a="����ֵ���";
echo $a;
echo "<br>";
$b = addcslashes($a, "����ֵ���");
echo $b;
echo "<br>";
$c = stripcslashes($b);
echo $c;