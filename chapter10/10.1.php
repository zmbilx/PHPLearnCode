<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 10:23
 */
echo "ָ��ʱ���ʱ���:".mktime(12,23,56,12,10,2012).'<br>';           //���ָ��ʱ���ʱ���
echo "ָ������Ϊ:".date("Y-m-d",mktime(12,23,56,12,10,2012)).'<br>';     // ʹ��date�����ʽ���������
echo "ָ��ʱ��Ϊ:".date("H:i:s",mktime(12,23,56,12,10,2012));