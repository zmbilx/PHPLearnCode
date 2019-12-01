<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 12:06
 */

setlocale(LC_ALL,"en_us");
echo "美国格式:".strftime('Today is %A');
echo '<p>';
setlocale(LC_ALL,"chs");
echo '简体中文格式:'.strftime('今天是%A');
echo '<p>';
setlocale(LC_ALL,"cht");
echo '<p>';
echo '繁体中文格式:'.strftime('今天是%A');

