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
    echo "������ $month �� $tody �գ��Ǳ�����Ѯ.";
}elseif ($tody >10 and $tody <= 20){
    echo "������ $month �� $tody �գ��Ǳ�����Ѯ.";
}elseif ($tody  >20 and $tody <= 31){
    echo "������ $month �� $tody �գ��Ǳ�����Ѯ.";
}