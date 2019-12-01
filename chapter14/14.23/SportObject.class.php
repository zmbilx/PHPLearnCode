<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 21:06
 */
class SportObject
{
    private $cont;
    public function __construct($cont){
        $this->cont = $cont;
    }

    public function __toString(){
        // TODO: Implement __toString() method.
        return $this->cont;
    }
}