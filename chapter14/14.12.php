<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 16:24
 */

// final 关键字表明不可以被继承
final class SportObject{
    function __construct(){
        echo 'initialize object';
    }
}

//class MyBook extends SportObject{
//    static function exam{
//        echo "You can't see me";
//    }
//}

//MyBook::exam();