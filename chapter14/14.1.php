<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 21:16
 */

class SportObject{
    function beatBasketball($name,$height,$avoirdupios,$age,$sec){      // ������Ա����
            if ($height>180 and $avoirdupios<=100){
                return $name."���ϴ�����ı�׼";
            }else{
                return $name."�����ϴ�����ı�׼";
            }
    }
}

$sport = new SportObject();
echo $sport->beatBasketball('����','185','80','20 ����','��');