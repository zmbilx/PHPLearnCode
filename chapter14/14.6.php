<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 22:24
 */

// ����
class SportObject{
    public $name;
    public $age;
    public $avoirdupois;        // ����
    public $sex;

    // ���캯��
    public function __construct($name, $age, $avoidrupois, $sex){
        $this->name = $name;
        $this->age = $age;
        $this->avoirdupois = $avoidrupois;
        $this->sex = $sex;
    }

    function showMe(){
        echo "��仰������ʾ";
    }
}

//����BeatBasketBall
class BeatBaskBall extends SportObject{
    public $height;

    function __construct($name, $height){
        $this->height = $height;
        $this->name = $name;
    }

    function showMe(){
        if ($this->height > 185){
            return $this->name.",���ϴ������Ҫ��.";
        }else{
            return $this->name.",�����ϴ������Ҫ��.";
        }
    }
}

// ����WeightLifing
class WeightLifing extends SportObject{
    function  showMe(){
        if ($this->avoirdupois<85){
            return $this->name.",���Ͼ���Ҫ��";
        }else{
            return $this->name.",�����Ͼ��ص�Ҫ��";
        }
    }
}

// ʵ��������
$beatbasketball = new BeatBaskBall("�Ƽ�",'190');
$weightlifting = new WeightLifing("����","185",'80','20','��');
echo $beatbasketball->showMe();
echo $weightlifting->showMe();