<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 21:33
 */

// ���캯��
class SportObject{
    public $name;
    public $height;
    public $avoirdupois;            // ����
    public $age;
    public $sex;

    public function __construct($name, $height, $avoirdupios, $sex, $age){
        $this->name = $name;
        $this->height = $height;
        $this->avoirdupois = $avoirdupios;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function bootFootBall(){
        if ($this->height<185 and $this->avoirdupois<80){
            return $this->name.",�����������Ҫ��";
        }else{
            return $this->name.",�������������Ҫ��";
        }
    }
}

$sport = new SportObject("����","185","80","20","��");
echo $sport->bootFootBall();