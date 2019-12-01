<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 18:50
 */


// 在对像中，两个等号表示它们的内容是否相等
// 三个等号表示它们的引用地址是否相等

class SportObject{
    private $name;
    function __construct($name){
        $this->name = $name;
    }
}

$book = new  SportObject('book');
$cloneBook = clone $book;
$refBook = $book;

if ($cloneBook == $book){
    echo '两个对像的内容相等.';
}

if ($refBook === $book){
    echo '两个对像的引用地址相等.<br>';
}