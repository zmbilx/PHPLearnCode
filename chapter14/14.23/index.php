<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 21:08
 */

function __autoload($class_name){      // ����__autoload����        ��Ҳ��һ��ħ������
    $class_path = $class_name.'.class.php';
    if (file_exists($class_path)){
        include_once ($class_path);
    }else{
        echo $class_path;
        echo '��·������';
    }
}

$myBook = new SportObject("��ɽ���в��˳� �����ɧ������");
echo $myBook;