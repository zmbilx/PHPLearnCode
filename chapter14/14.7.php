<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 22:44
 */

// �������ڲ�ʽ_call����

//class test
//{
////ħ������__call
//    /*
//    $method ��÷�����
//    $arg ��÷����Ĳ�������
//    */
//    public function __call($method, $arg){
//        echo '��������Ҳ����ڵķ���', $method, '����<br/>';
//        echo '������һ������<br/>';
//        echo print_r($arg), '<br/>';
//    }
//}
//$list=new test();
//$list->say(1,2,3);

class example{
    function exam(){
        if (isset($this)){
            echo '$this ��ֵΪ��'.get_class($this);
        }else{
            echo '$this δ����';
        }
    }
}

$class_name = new example();
$class_name->exam();
