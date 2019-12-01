<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 22:58
 */

function c_back($str){
    $str = "<font color=$str[1]>$str[2]</font>";
   return $str;
}

$string = '[color=blue]×ÖÌåÑÕÉ«[/color]';
echo preg_replace_callback('/\[color=(.*)\](.*)\[\/color\]/U',"c_back",$string);