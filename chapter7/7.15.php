<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 10:02
 */
$array_push = array('PHP �����ŵ���ͨ','PHP �����ֲ�','PHP ��������ģ���ȫ','PHP ��������ѧ�ֲ�');
array_push($array_push,'PHP ��������ģ���ȫ','PHP ��������ѧ�ֲ�');
print_r($array_push);
echo '<br>';
$result = array_unique($array_push);
print_r($result);