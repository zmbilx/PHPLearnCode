<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 19:02
 */
$text="祝全国程序开发人员在编程之路上一帆风顺二龙腾飞三阳开泰四季平安五福临门六六大顺七星高照八方来财九九同心十全十美
百事可乐千事顺心万事吉祥PHP编程一级棒.";
if (strlen($text)>30){
    echo substr($text,0,30)."......";
}else{
    echo $text;
}