<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 21:11
 */

$str1 = "str2.jpg";
$str2 = "str10.jpg";
$str3 = "mrsoft";
$str4 = "MRSOFT";

echo strcmp($str1,$str2);           // ���ֽڱȽϣ�����1
echo " ";
echo strcmp($str3,$str4);           // ���ֽڱȽϣ�����1 Сд��ascll��0�ȴ�д��ĸ��ASCII���
echo " ";
// ����ǰ�����Ȼ���򷨣����Ϊ���֣��������ִ�С���бȽ�
// ����������������ascii��Ƚ�
echo strnatcmp($str1,$str2);        // ���� -1
echo " ";
echo strnatcmp($str3,$str4);        // ���� 1



