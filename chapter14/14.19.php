<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 18:59
 */

class SportObject{
    private $type='';
    public function __get($name){
        // TODO: Implement __get() method.
        if (isset($this->$name)){           // ����ͻȻ�������ˣ�������
            echo '����'.$name.'��ֵΪ:'.$this->$name.'<br>';
        }else{
            echo '����'.$name.'δ����,��ʼ��Ϊ 0<br>';
        }
    }

    public function __set($name, $value){
        // TODO: Implement __set() method.
        if (isset($this->$name)){
            $this->$name = $value;
            echo '����'.$name.'��ֵΪ:'.$value.'<br>';
        }else{
            $this->$name = $value;                  // �����൱���ָ�������һ��
            echo '����'.$name.'����ʼ��Ϊ:'.$value.'<br>';
        }
    }
}

$MyComputer = new SportObject();
$MyComputer->type = 'DIY';
$MyComputer->type;
$MyComputer->name;