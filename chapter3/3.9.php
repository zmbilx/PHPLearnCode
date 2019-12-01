<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 9:56
 */

define ("MESSAGE","我是一名PHP程序员");
echo MESSAGE."<br>";        // 输出
//echo Message."<br>";        // 输出Message表示没有该常量
define("COUNT","我想要怒放的生命",true);
echo COUNT.'<br>';          // 输出常量count
echo Count.'<br>';          // 输出常量count，因为设置大小写不敏感
$name="count";
echo constant($name);       // 输出常量count，此函数用于获取常量名称
echo defined("MESSAGE").'<br>';  // 如果变量被定义，则返回true,使用echo输出显示1

