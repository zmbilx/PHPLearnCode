<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 22:16
 */
$str="PHP 编程词典@NET编程词典@ASP编程词典@JSP编程词典";
$str_arr=explode("@",$str);     //  把@当作分割符
print_r($str_arr);