<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 16:44
 */

// �����ӿ�MPopedom
interface MPopedom{
    function popedom();
}

// �����ӿ�MPurview
interface MPurview{
    function purview();
}

//��������Member,ʵ��һ���ӿ�MPurview
class Member implements MPurview{
    function purview(){
        // TODO: Implement purview() method.
        echo "��Աӵ�е�Ȩ��";
    }
}

// ��������Manager,ʵ�ֶ���ӿ�MPurview ��MPopedom
class Manager implements MPopedom, MPurview{
    function  purview(){
        // TODO: Implement purview() method.
        echo "����Աӵ�л�Ա��ȫ��Ȩ��";
    }

    function popedom(){
        // TODO: Implement popedom() method.
        echo "����Ա���л�Աû�е�Ȩ��";
    }
}

$member = new Member();
$manager = new Manager();
$member->purview();
echo '<p>';
$manager->purview();
$manager->popedom();