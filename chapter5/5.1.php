<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 18:14
 */
$str="\r\r(:@@ ����һ�������ַ��� @_@:)";
echo $str."<br>";
echo trim($str)."<br>";            // ȥ���ַ����������߿ո�
echo "<br>";
echo trim($str,"\r\r(::)");         // ȥ���ַ����������ߵ������ַ�

