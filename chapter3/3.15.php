<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 10:43
 */
$hr = '����';
function lxt(){
    $gj = "����";
    echo $gj."<br>";
    global $hr;             //���ùؽ���global�ں����ڲ�����ȫ�ֱ���
    echo $hr."<br>";
}

lxt();