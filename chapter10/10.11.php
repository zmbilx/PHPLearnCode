<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 12:30
 */

//声明run_time函数
function run_time(){
    list($msec,$sec)=explode(" ",microtime());      // microtime 返回当前 Unix 时间戳和微秒数
    return (float)$msec + (float)$sec;
}

$start_time = run_time();
//运行PHP代码
$time1 = strtotime(date("Y-m-d H:i:s"));            //当前系统时间  将时间转换为时间戳
$time2 = strtotime("2019-12-1 00:00:00");           // 放假时间
$time3 = strtotime('2020-1-1');                     // 2017年元旦
$sub1 = ceil(($time2 - $time1)/3600);               // 返回不小于 value 的下一个整数，value 如果有小数部分则进一位。
$sub2 = ceil(($time3 - $time1)/86400);              // 60s*60m*24h 一天经过的秒数
echo "离放假还有<font color=red>$sub1</font>小时!!!";
echo '<p>';
echo "离2020年元旦还有<font color=red>$sub2</font>天!!!";
$end_time = run_time();

echo '<br>'.($end_time-$start_time);
