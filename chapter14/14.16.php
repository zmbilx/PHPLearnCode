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
//$book2 = $book1;            // ��PHP5�У��������һ��ָ�������
$book2 = clone $book1;      //  ������������ı���
echo "����Book1��ֵΪ:".$book1->getType();
echo '<br>';
echo "����Book2��ֵΪ:".$book2->getType();
