<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 18:56
 */
$filename = "07.txt";
if (is_file($filename)){
    echo "�ļ����ֽ���:".filesize($filename).'<br>';
    $fopen = fopen($filename,"rb");
    echo "ָ���ʼλ����: ".ftell($fopen)."<br>";
    fseek($fopen, 34);
    echo "ʹ��fseek()������ָ��λ�ã�".ftell($fopen)."<br>";
    echo "�����ǰָ����������:".fgets($fopen)."<br>";
    if (feof($fopen)){
       echo "��ǰ�ļ�ָ���ļ�δβ:".ftell($fopen)."<br>";
    }
    rewind($fopen);     // ���ļ�ָ�����õ��ļ���ͷ
    echo "ʹ��rewind()������ָ���λ��:".ftell($fopen)."<br>";
    echo "���ǰ34���ֽڵ�����:".fgets($fopen,34);
    fclose($fopen);
}else{
    echo "�ļ������ڡ�";
}