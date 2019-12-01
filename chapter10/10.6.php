<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 10:48
 */

echo '输出单个变量:'.date("Y").'-'.date("m")."-".date('d');
echo '<p>';
echo '输出组合变量:'.date('Y-m-d');
echo '<p>';
echo '输出详细的日期及时间: '.date('Y-m-d H:i:s');
echo '<p>';
echo '还可以更详细吗？？';
echo date("i Y-m-d H:i:s T");
echo '<p>';
echo '输出转义字符:';
echo date("\T\o\d\a\y\i\s\\t\\h\\ezS\o\\f\y\\e\a\\r");


