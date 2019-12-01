<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 22:46
 */

$str = "!, $, ^, *, ., [, ], \\, /, b, <, >";
$str2 = 'b';
$match_one = preg_quote($str,$str2);
echo $match_one;