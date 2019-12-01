<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 16:10
 */

$arr = array("A","B","C","D","E","F","G","H","I","J");

for ($i=0; $i<10; $i++){
    echo "<br>";
    if ($i % 2 == 0){
        continue;
    }
    for (;;){
        for ($j = 0; $j<count($arr); $j++){
            if ($j == $i){
                continue 3;         // 跳出最外层循环
            }else{
                echo "\$arr[".$j."] = ".$arr[$j]." ";       //输出表达式
            }
        }
    }

}