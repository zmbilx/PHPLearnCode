<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 12:06
 */

class Book{
    private $name = 'computer';
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
       return $this->name;
    }
}

class LBook extends Book{

}

$lBook = new LBook();
echo '��ȷ����˽�б����ķ���:';
$lBook->setName("PHP5 �����ŵ�Ӧ�ÿ���");
echo $lBook->getName();
echo '<br>ֱ�Ӳ���˽�б���:';
//echo Book::$name;             ����ʹ�ûᱨ��