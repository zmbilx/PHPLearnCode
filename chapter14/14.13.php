<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 16:28
 */

abstract class CommodityObjetc{         // 定义抽像类
    abstract function service($getName,$price,$num);
}

class MyBook extends CommodityObjetc{       // 定义子类，继承抽像类
     function service($getName, $price, $num){
         // TODO: Implement service() method
         echo '您购买的商品是'.$getName.",该商品的价格是：".$price.'元。';
         echo "您购买的数量为：".$num."本。";
         echo "如果发现缺页，损坏请在3日内更换。";
     }
}

class MyComputer extends CommodityObjetc{
    function service($getName, $price, $num){
        // TODO: Implement service() method.
        echo '您购买的商品是'.$getName.',该商品的价格是:'.$price.'元';
        echo '您购买的数量为'.$num.'，该商品价格是:'.$price.'元';
        echo '如发生非人为质量问题，请在3个月内更换。';
    }
}

$book = new MyBook();
$computer = new MyComputer();
$book->service('《PHP从入门到精通》',85,3);
echo '<p>';
$computer->service('联想笔记本',8500,1);