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

    // ����
    public function bootFootBall(){
        if ($this->height<185 and $this->avoirdupois<85){
            return $this->name.",�����������Ҫ��.";
        }else{
           return $this->name.",�����������Ҫ��.";
        }
    }

    // ��������
    function __destruct(){
        // TODO: Implement __destruct() method.
        echo "<p>�������٣�������������</p>";
    }

}

$sport = new SportObject("����","185","80","20","��");
// unset($sport);               // ǿ���ͷű���
echo "ok"."<br>";