<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 16:56
 */

class SportObject{
    private $objetc_type = 'book';
    public function setType($type){
        $this->objetc_type = $type;
    }

    public function getType(){
       return $this->objetc_type;
    }
}

$book1 = new SportObject();
//$book2 = $book1;            // ��PHP5�У��������һ��ָ�������
$book2 = clone $book1;      //  ������������ı���
$book2->setType('Computer');
echo "����Book1��ֵΪ:".$book1->getType();