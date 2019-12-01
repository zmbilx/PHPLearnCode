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
    public $avoirdupois;            //体重

    public function bootFootBall($name,$height,$avoirduuois){
        $this->name = $name;
        $this->height = $height;
        $this->avoirdupois = $avoirduuois;
        if ($this->height<185 and $this->avoirdupois < 85){
                return $this->name.'符合踢足球的要求!';
        }else{
                return $this->name.'不符合踢足球的要求!';
        }
    }
}

$sport = new SportObject();
echo $sport->bootFootBall('明日','185','80');