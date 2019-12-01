<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 22:52
 */
$string = '[b]粗体字体[b]';
// 正则表达式后面的i表示不区分大小写
$b_rst = preg_replace('/\[b\](.*)\[b\]/i','<b>$1</b>',$string);
echo $b_rst;