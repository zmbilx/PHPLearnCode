<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 12:12
 */

class Book{
    protected $name = "computer";
}

class LBook extends Book{
    public function showMe(){
        echo '对于protected 修饰的变量，在子类中是可以直接调用的。如$name = '.$this->name;
    }
}

$lBook = new LBook();
$lBook->showMe();
echo '<br> 在其他的地方是不可以调用的，否则:';
//$lBook->name = 'history';