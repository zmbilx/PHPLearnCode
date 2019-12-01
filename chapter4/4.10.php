<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 16:01
 */

while(true){
    for (;;){
        for ($i=0; $i<=10; $i++){
            echo $i." ";
            if($i == 7){
                echo "<p>变量\$i等于7，跳出一重循环.</p>";
                break 1;
            }
        }

        for ($j=0; $j<20; $j++){
            echo $j." ";
            if ($j == 15){
                echo "<p>变量\$j等于15，跳出最外层循环.</p>";
                break 3;            // 跳出三层循环。
            }
        }
    }
    echo "这是一句不会被执行的话.<br>";
}