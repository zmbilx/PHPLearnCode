<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 15:46
 */

header('content-type:image/gif');
$im = imagecreate(200,60);
$white = imagecolorallocate($im,30,30,30);
imagegif($im);
