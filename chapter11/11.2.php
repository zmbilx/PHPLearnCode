<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 15:21
 */
if (!isset($_COOKIE['visittime'])){
    setcookie('visittime',date('y-m-d H:i:s'));
    echo '��ӭ����һ�η�����վ!<br>';
}else{
    setcookie('visittime',date('y-m-d H:i:s'),time()+60);
    echo '����һ�η�����վ��ʱ��Ϊ'.$_COOKIE['visittime'].'<br>';
}
echo '�����η�����վ��ʱ��Ϊ'.date('y-m-d H:i:s').'<br>';
