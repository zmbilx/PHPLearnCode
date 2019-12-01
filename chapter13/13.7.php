<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 18:56
 */
$filename = "07.txt";
if (is_file($filename)){
    echo "文件总字节数:".filesize($filename).'<br>';
    $fopen = fopen($filename,"rb");
    echo "指针初始位置是: ".ftell($fopen)."<br>";
    fseek($fopen, 34);
    echo "使用fseek()函数后指针位置：".ftell($fopen)."<br>";
    echo "输出当前指针后面的内容:".fgets($fopen)."<br>";
    if (feof($fopen)){
       echo "当前文件指向文件未尾:".ftell($fopen)."<br>";
    }
    rewind($fopen);     // 将文件指针设置到文件开头
    echo "使用rewind()函数后指针的位置:".ftell($fopen)."<br>";
    echo "输出前34个字节的内容:".fgets($fopen,34);
    fclose($fopen);
}else{
    echo "文件不存在。";
}