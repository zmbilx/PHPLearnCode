<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 22:31
 */
$preg = '/\d{3,4}-?\d{7,8}/';
$arr = array('043212345678','0431-7654321','12345678');
$preg_arr = preg_grep($preg,$arr);
var_dump($preg_arr);