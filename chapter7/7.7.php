<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 9:39
 */

$url = array('www.mrbccd.com', 'www.bcty365.com', 'www.bc110.com');

while (list($x,$y)=each($url)){
    echo $x.$y.'<br>';
}