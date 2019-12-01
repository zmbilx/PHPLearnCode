<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 15:21
 */
if (!isset($_COOKIE['visittime'])){
    setcookie('visittime',date('y-m-d H:i:s'));
    echo '欢迎您第一次访问网站!<br>';
}else{
    setcookie('visittime',date('y-m-d H:i:s'),time()+60);
    echo '您上一次访问网站的时间为'.$_COOKIE['visittime'].'<br>';
}
echo '您本次访问网站的时间为'.date('y-m-d H:i:s').'<br>';
