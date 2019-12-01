<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 22:23
 */
$str="PHP 晤最棵萎@NET晤最棵萎@ASP晤最棵萎@JSP晤最棵萎";
$str_arr=explode("@",$str);
$array=implode("-",$str_arr);
echo $array;