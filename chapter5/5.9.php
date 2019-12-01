<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 18:57
 */
echo substr("She is a well-read girl",0);      // 从第一个字符开始截取
echo "<br>";
echo substr("She is a well-read girl",4,14);   // 从第5个字符开始连续截取14个字符
echo "<br>";
echo substr("She is a well-read girl",-4,4);   // 从到数第4个字符开始截取4个字符
echo "<br>";
echo substr("She is a well-read girl",0,-4);   // 从第一个字符开始，截取到到数第4个字符