<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 18:50
 */


// �ڶ����У������Ⱥű�ʾ���ǵ������Ƿ����
// �����Ⱥű�ʾ���ǵ����õ�ַ�Ƿ����

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
    echo '����������������.';
}

if ($refBook === $book){
    echo '������������õ�ַ���.<br>';
}