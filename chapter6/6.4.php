<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 22:52
 */
$string = '[b]��������[b]';
// ������ʽ�����i��ʾ�����ִ�Сд
$b_rst = preg_replace('/\[b\](.*)\[b\]/i','<b>$1</b>',$string);
echo $b_rst;