<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 12:02
 */

class Book
{
    const NAME="computer";
    function __construct(){
       echo '����ͼ����ھ�Ϊ:'.Book::NAME.' ';
    }
}

class I_book extends Book{
    const  NAME='foreign language';
    function __construct(){
        parent::__construct();
        echo '����ͼ����ھ�Ϊ:'.self::NAME.' ';
    }
}

$obj = new I_book();