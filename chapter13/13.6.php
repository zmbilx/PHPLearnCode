<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 18:44
 */
$path = 'D:\\';

if (is_dir($path)){
    $dir = scandir($path);
    foreach ($dir as $value){
        echo $value.'<br>';
    }
}else{
    echo "Ä¿Â¼´íÎó";
}
