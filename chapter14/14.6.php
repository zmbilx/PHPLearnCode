<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 22:24
 */

// 父类
class SportObject{
    public $name;
    public $age;
    public $avoirdupois;        // 体重
    public $sex;

    // 构造函数
    public function __construct($name, $age, $avoidrupois, $sex){
        $this->name = $name;
        $this->age = $age;
        $this->avoirdupois = $avoidrupois;
        $this->sex = $sex;
    }

    function showMe(){
        echo "这句话不会显示";
    }
}

//子类BeatBasketBall
class BeatBaskBall extends SportObject{
    public $height;

    function __construct($name, $height){
        $this->height = $height;
        $this->name = $name;
    }

    function showMe(){
        if ($this->height > 185){
            return $this->name.",符合打蓝球的要求.";
        }else{
            return $this->name.",不符合打蓝球的要求.";
        }
    }
}

// 子类WeightLifing
class WeightLifing extends SportObject{
    function  showMe(){
        if ($this->avoirdupois<85){
            return $this->name.",符合举重要求。";
        }else{
            return $this->name.",不符合举重的要求。";
        }
    }
}

// 实例化对像
$beatbasketball = new BeatBaskBall("科技",'190');
$weightlifting = new WeightLifing("明日","185",'80','20','男');
echo $beatbasketball->showMe();
echo $weightlifting->showMe();