<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 16:28
 */

abstract class CommodityObjetc{         // ���������
    abstract function service($getName,$price,$num);
}

class MyBook extends CommodityObjetc{       // �������࣬�̳г�����
     function service($getName, $price, $num){
         // TODO: Implement service() method
         echo '���������Ʒ��'.$getName.",����Ʒ�ļ۸��ǣ�".$price.'Ԫ��';
         echo "�����������Ϊ��".$num."����";
         echo "�������ȱҳ��������3���ڸ�����";
     }
}

class MyComputer extends CommodityObjetc{
    function service($getName, $price, $num){
        // TODO: Implement service() method.
        echo '���������Ʒ��'.$getName.',����Ʒ�ļ۸���:'.$price.'Ԫ';
        echo '�����������Ϊ'.$num.'������Ʒ�۸���:'.$price.'Ԫ';
        echo '�緢������Ϊ�������⣬����3�����ڸ�����';
    }
}

$book = new MyBook();
$computer = new MyComputer();
$book->service('��PHP�����ŵ���ͨ��',85,3);
echo '<p>';
$computer->service('����ʼǱ�',8500,1);