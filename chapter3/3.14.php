<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 10:34
 */
function zdy(){
    static $message = 0;
    $message += 1;      // ¾²Ì¬±äÁ¿¼Ó1
    echo $message." ";
}

function zdy1(){
    $message = 0;
    $message += 1;
    echo $message." ";
}

for ($i=0; $i<10; $i++){
    zdy();
}
echo '<br>';
for ($i=0; $i<10; $i++){
    zdy1();
}