<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 12:06
 */

setlocale(LC_ALL,"en_us");
echo "������ʽ:".strftime('Today is %A');
echo '<p>';
setlocale(LC_ALL,"chs");
echo '�������ĸ�ʽ:'.strftime('������%A');
echo '<p>';
setlocale(LC_ALL,"cht");
echo '<p>';
echo '�������ĸ�ʽ:'.strftime('������%A');

