<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 9:56
 */

define ("MESSAGE","����һ��PHP����Ա");
echo MESSAGE."<br>";        // ���
//echo Message."<br>";        // ���Message��ʾû�иó���
define("COUNT","����Ҫŭ�ŵ�����",true);
echo COUNT.'<br>';          // �������count
echo Count.'<br>';          // �������count����Ϊ���ô�Сд������
$name="count";
echo constant($name);       // �������count���˺������ڻ�ȡ��������
echo defined("MESSAGE").'<br>';  // ������������壬�򷵻�true,ʹ��echo�����ʾ1

