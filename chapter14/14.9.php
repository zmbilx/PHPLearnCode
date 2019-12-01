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
echo '正确操作私有变量的方法:';
$lBook->setName("PHP5 从入门到应用开发");
echo $lBook->getName();
echo '<br>直接操作私有变量:';
//echo Book::$name;             这样使用会报错