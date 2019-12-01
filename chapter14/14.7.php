<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 22:44
 */

// 这里是在测式_call方法

//class test
//{
////魔术方法__call
//    /*
//    $method 获得方法名
//    $arg 获得方法的参数集合
//    */
//    public function __call($method, $arg){
//        echo '你想调用我不存在的方法', $method, '方法<br/>';
//        echo '还传了一个参数<br/>';
//        echo print_r($arg), '<br/>';
//    }
//}
//$list=new test();
//$list->say(1,2,3);

class example{
    function exam(){
        if (isset($this)){
            echo '$this 的值为：'.get_class($this);
        }else{
            echo '$this 未定义';
        }
    }
}

$class_name = new example();
$class_name->exam();
