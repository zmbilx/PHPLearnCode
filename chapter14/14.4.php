<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 21:33
 */

// 构造函数
class SportObject{
    public $name;
    public $height;
    public $avoirdupois;            // 体重
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
            return $this->name.",符合踢足球的要求";
        }else{
            return $this->name.",不符合踢足球的要求";
        }
    }
}

$sport = new SportObject("明日","185","80","20","男");
echo $sport->bootFootBall();