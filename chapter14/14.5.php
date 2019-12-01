<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 21:42
 */

class SportObject{
    public $name;
    public $height;
    public $avoirdupois;
    public $age;
    public $sex;

    public function __construct($name,$height,$avoirdupois,$age,$sex){
        $this->name = $name;
        $this->height = $height;
        $this->avoirdupois = $avoirdupois;
        $this->age = $age;
        $this->sex = $sex;
    }

    // 公有
    public function bootFootBall(){
        if ($this->height<185 and $this->avoirdupois<85){
            return $this->name.",符合踢足球的要求.";
        }else{
           return $this->name.",不符踢足球的要求.";
        }
    }

    // 析构函数
    function __destruct(){
        // TODO: Implement __destruct() method.
        echo "<p>对像被销毁，调用析构方法</p>";
    }

}

$sport = new SportObject("明日","185","80","20","男");
// unset($sport);               // 强制释放变量
echo "ok"."<br>";