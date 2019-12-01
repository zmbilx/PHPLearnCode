<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 10:02
 */
$array_push = array('PHP 从入门到精通','PHP 范例手册','PHP 开发典型模块大全','PHP 网络编程自学手册');
array_push($array_push,'PHP 开发典型模块大全','PHP 网络编程自学手册');
print_r($array_push);
echo '<br>';
$result = array_unique($array_push);
print_r($result);