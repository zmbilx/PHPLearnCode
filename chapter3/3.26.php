<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 12:34
 */

function example(&$m){
    $m = $m * 5 + 10;
    echo "�ں����ڣ�\$m = $m";
}

$m = 1;
example($m);
echo "<p>�ں�����:\$m = $m </p>";