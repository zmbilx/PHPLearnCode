<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 21:16
 */

class SportObject{
    function beatBasketball($name,$height,$avoirdupios,$age,$sec){      // 声明成员方法
            if ($height>180 and $avoirdupios<=100){
                return $name."符合打篮球的标准";
            }else{
                return $name."不符合打篮球的标准";
            }
    }
}

$sport = new SportObject();
echo $sport->beatBasketball('明日','185','80','20 周岁','男');