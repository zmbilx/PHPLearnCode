<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 22:23
 */
$str="PHP ��̴ʵ�@NET��̴ʵ�@ASP��̴ʵ�@JSP��̴ʵ�";
$str_arr=explode("@",$str);
$array=implode("-",$str_arr);
echo $array;