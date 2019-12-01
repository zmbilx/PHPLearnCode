<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 10:42
 */
$arr = getdate();
echo $arr['year'].'-'.$arr['mon'].'-'.$arr['mday'].' ';
echo $arr['hours'].'-'.$arr['minutes'].':'.$arr['seconds']." ".$arr['weekday'];
echo '<p>';
echo "Today is the $arr[yday]th of year";