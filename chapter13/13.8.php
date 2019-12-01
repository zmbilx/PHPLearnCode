<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 18:00
 */

$filename = '08.txt';
$fd = fopen($filename,'w');
flock($fd,LOCK_EX);
fwrite($fd,'highman1');
flock($fd,LOCK_UN);
fclose($fd);
$s = readfile($filename);
echo '<br>'.$s.'<br>';