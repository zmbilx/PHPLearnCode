<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 20:48
 */

// 类SportObject
class SportObject{
    public function myDream(){
        echo "调用的方法存在，直接执行此方法.<br>";
    }

    public function __call($name, $arguments){
        // TODO: Implement __call() method.
       echo "如果方法不存在，则执行__call方法.<br>";
       echo "方法名为:".$name."<br>";
       echo '参数有：';
        var_dump($arguments);
    }
}

$exam = new SportObject();
$exam->myDream();
$exam->mDream('how','what','why');