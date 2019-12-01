<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 17:02
 */

class SportObject{
    private $objetc_type = 'book';
    public function setType($type){
        $this->objetc_type = $type;
    }

    public function getType(){
        return $this->objetc_type;
    }

    public function __clone(){
        // TODO: Implement __clone() method.
        $this->objetc_type = 'computer';
    }
}

$book1 = new SportObject();
//$book2 = $book1;            // 在PHP5中，这个就是一个指针的引用
$book2 = clone $book1;      //  这个才是真正的备份
echo "对像Book1的值为:".$book1->getType();
echo '<br>';
echo "对像Book2的值为:".$book2->getType();
