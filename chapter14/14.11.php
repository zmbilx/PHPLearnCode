<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 12:17
 */

class Book
{
    static $num = 0;
    public function showMe(){
        echo '���ǵ�'.self::$num.'λ�ÿ�';
        self::$num++;
    }
}

$book1 = new Book();
$book1->showMe();
echo "<br>";
$book2 = new Book();
$book2->showMe();
echo "<br>";
echo "���ǵ�".BOOK::$num."λ�ÿ͡�";
