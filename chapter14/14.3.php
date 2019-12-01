<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 21:28
 */

// 这个类主要用实验了常量
class SportObject{
    const BOOK_TYPE = '计算机图书';
    public $object_name;

    function setObjectName($name){
        $this->object_name = $name;
    }

    function getObjectName(){
        return $this->object_name;
    }
}

$c_book = new SportObject();
$c_book->setObjectName("PHP类");
echo SportObject::BOOK_TYPE."->";
echo $c_book->getObjectName();