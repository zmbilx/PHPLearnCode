<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 10:23
 */
echo "指定时间的时间戳:".mktime(12,23,56,12,10,2012).'<br>';           //输出指定时间的时间戳
echo "指定日期为:".date("Y-m-d",mktime(12,23,56,12,10,2012)).'<br>';     // 使用date输出格式化后的日期
echo "指定时间为:".date("H:i:s",mktime(12,23,56,12,10,2012));