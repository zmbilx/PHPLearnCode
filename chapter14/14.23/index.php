<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 21:08
 */

function __autoload($class_name){      // 创建__autoload方法        这也是一个魔法函数
    $class_path = $class_name.'.class.php';
    if (file_exists($class_path)){
        include_once ($class_path);
    }else{
        echo $class_path;
        echo '类路径错误';
    }
}

$myBook = new SportObject("江山代有才人出 各领风骚数百年");
echo $myBook;