<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 21:39
 */
$number = 1868.96;
echo number_format($number);        // ������С����
echo "<br>";
echo number_format($number,2);      // ����2λС��
echo "<br>";
$number2 = 11886655.760055;
echo number_format($number2,2,'.',','); //����2λС�㣬Ȼ�����������ΪС������Ǹ�.�����ĸ�����Ϊǧλ���Ǹ����㡣ע���������������滻
