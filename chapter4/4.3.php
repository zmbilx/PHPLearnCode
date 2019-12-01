<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 15:30
 */

$month = date("n");
$tody = date("j");

if ($tody>=1 and $tody <=10){
    echo "今天是 $month 月 $tody 日，是本月上旬.";
}elseif ($tody >10 and $tody <= 20){
    echo "今天是 $month 月 $tody 日，是本月中旬.";
}elseif ($tody  >20 and $tody <= 31){
    echo "今天是 $month 月 $tody 日，是本月下旬.";
}