<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 21:07
 */

$str1 = "���ձ�̴ʵ�!!";
$str2 = "���ձ�̴ʵ�!!";
$str3 = "mrsoft";
$str4 = "MRSOFT";
echo strcmp($str1,$str2);
echo strcmp($str3,$str4);           // �ú������ִ�Сд
echo strcasecmp($str3, $str4);      // �ú��������ִ�С

