<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 16:57
 */

$filepath = "05.txt";
$str = "此情可待成追亿 只是当时已惘然<br>";
echo '用fwrite函数写入文件:';
$fopen = fopen($filepath,'wb') or die('文件不存在');
fwrite($fopen,$str);
fclose($fopen);
readfile($filepath);

echo "<p>用file_put_contents 函数写入文件:";
file_put_contents($filepath, $str);         //就会把前面的东西都清空了
readfile($filepath);


