<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 18:56
 */

class SportObject{

}

class MyBook extends SportObject{
    private $type;
}

$cBook = new MyBook();
if ($cBook instanceof MyBook){
    echo '����$cBook����MyBook��<br>';
}

if ($cBook instanceof SportObject){
    echo '����$cBook����SportObject��<br>';
}



