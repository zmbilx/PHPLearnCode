<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 20:48
 */

// ��SportObject
class SportObject{
    public function myDream(){
        echo "���õķ������ڣ�ֱ��ִ�д˷���.<br>";
    }

    public function __call($name, $arguments){
        // TODO: Implement __call() method.
       echo "������������ڣ���ִ��__call����.<br>";
       echo "������Ϊ:".$name."<br>";
       echo '�����У�';
        var_dump($arguments);
    }
}

$exam = new SportObject();
$exam->myDream();
$exam->mDream('how','what','why');