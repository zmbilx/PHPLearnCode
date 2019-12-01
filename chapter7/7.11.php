<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 9:48
 */
//$str=array("明日",'编程字典','网址','www.mrbccd.com','服务电话','0431-84972266');
//echo count($str);  // 输出 6

$arr = array('php'=>array('PHP参考函数大全','PHP程序开发范例宝典','PHP数据库系统开发手册'),
            'asp'=>array('ASP 经验技巧宝典'));
echo count($arr,COUNT_RECURSIVE);