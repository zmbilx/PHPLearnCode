<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 18:47
 */
$str = "select * from tb_book where bookname='PHP5 从入门到精通'";
echo $str."<br>";
$a = addslashes($str);
echo $a."<br>";
$b = stripslashes($a);
echo $b."<br>";