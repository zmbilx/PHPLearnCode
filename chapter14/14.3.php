<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 21:28
 */

// �������Ҫ��ʵ���˳���
class SportObject{
    const BOOK_TYPE = '�����ͼ��';
    public $object_name;

    function setObjectName($name){
        $this->object_name = $name;
    }

    function getObjectName(){
        return $this->object_name;
    }
}

$c_book = new SportObject();
$c_book->setObjectName("PHP��");
echo SportObject::BOOK_TYPE."->";
echo $c_book->getObjectName();