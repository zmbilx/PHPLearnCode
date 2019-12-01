<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 18:52
 */
$a="±à³Ì×ÖµäÍø";
echo $a;
echo "<br>";
$b = addcslashes($a, "±à³Ì×ÖµäÍø");
echo $b;
echo "<br>";
$c = stripcslashes($b);
echo $c;