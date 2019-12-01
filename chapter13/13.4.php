<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 16:21
 */

$filename = '04.txt';
$fp = fopen($filename,"rb");
echo fread($fp, 32);
echo '<p>';
echo fread($fp, filesize($filename));