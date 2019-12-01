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
        if (isset($this->$name)){           // 这里突然搞明白了，不错不错
            echo '变量'.$name.'的值为:'.$this->$name.'<br>';
        }else{
            echo '变量'.$name.'未定义,初始化为 0<br>';
        }
    }

    public function __set($name, $value){
        // TODO: Implement __set() method.
        if (isset($this->$name)){
            $this->$name = $value;
            echo '变量'.$name.'赋值为:'.$value.'<br>';
        }else{
            $this->$name = $value;                  // 这里相当于又给定义了一次
            echo '变量'.$name.'被初始化为:'.$value.'<br>';
        }
    }
}

$MyComputer = new SportObject();
$MyComputer->type = 'DIY';
$MyComputer->type;
$MyComputer->name;