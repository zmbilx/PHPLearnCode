<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 21:21
 */

class SportObject{
    public $name;
    public $height;
    public $avoirdupois;            //����

    public function bootFootBall($name,$height,$avoirduuois){
        $this->name = $name;
        $this->height = $height;
        $this->avoirdupois = $avoirduuois;
        if ($this->height<185 and $this->avoirdupois < 85){
                return $this->name.'�����������Ҫ��!';
        }else{
                return $this->name.'�������������Ҫ��!';
        }
    }
}

$sport = new SportObject();
echo $sport->bootFootBall('����','185','80');