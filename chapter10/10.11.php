<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 12:30
 */

//����run_time����
function run_time(){
    list($msec,$sec)=explode(" ",microtime());      // microtime ���ص�ǰ Unix ʱ�����΢����
    return (float)$msec + (float)$sec;
}

$start_time = run_time();
//����PHP����
$time1 = strtotime(date("Y-m-d H:i:s"));            //��ǰϵͳʱ��  ��ʱ��ת��Ϊʱ���
$time2 = strtotime("2019-12-1 00:00:00");           // �ż�ʱ��
$time3 = strtotime('2020-1-1');                     // 2017��Ԫ��
$sub1 = ceil(($time2 - $time1)/3600);               // ���ز�С�� value ����һ��������value �����С���������һλ��
$sub2 = ceil(($time3 - $time1)/86400);              // 60s*60m*24h һ�쾭��������
echo "��żٻ���<font color=red>$sub1</font>Сʱ!!!";
echo '<p>';
echo "��2020��Ԫ������<font color=red>$sub2</font>��!!!";
$end_time = run_time();

echo '<br>'.($end_time-$start_time);
