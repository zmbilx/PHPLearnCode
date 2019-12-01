<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 21:02
 */

class SportObject{
    private $type='DIY';
    public function __toString(){
        // TODO: Implement __toString() method.
        return $this->type;
    }
}

$myComputer = new SportObject();
echo '对像$myComputer的值为:';
echo $myComputer;