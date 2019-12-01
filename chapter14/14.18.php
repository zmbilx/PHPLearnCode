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
    echo '对像$cBook属于MyBook类<br>';
}

if ($cBook instanceof SportObject){
    echo '对像$cBook属于SportObject类<br>';
}



