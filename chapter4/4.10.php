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
                echo "<p>����\$i����7������һ��ѭ��.</p>";
                break 1;
            }
        }

        for ($j=0; $j<20; $j++){
            echo $j." ";
            if ($j == 15){
                echo "<p>����\$j����15�����������ѭ��.</p>";
                break 3;            // ��������ѭ����
            }
        }
    }
    echo "����һ�䲻�ᱻִ�еĻ�.<br>";
}