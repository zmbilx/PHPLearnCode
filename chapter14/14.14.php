<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 16:44
 */

// 声明接口MPopedom
interface MPopedom{
    function popedom();
}

// 声明接口MPurview
interface MPurview{
    function purview();
}

//创建子类Member,实现一个接口MPurview
class Member implements MPurview{
    function purview(){
        // TODO: Implement purview() method.
        echo "会员拥有的权限";
    }
}

// 创建子类Manager,实现多个接口MPurview 和MPopedom
class Manager implements MPopedom, MPurview{
    function  purview(){
        // TODO: Implement purview() method.
        echo "管理员拥有会员的全部权限";
    }

    function popedom(){
        // TODO: Implement popedom() method.
        echo "管理员还有会员没有的权限";
    }
}

$member = new Member();
$manager = new Manager();
$member->purview();
echo '<p>';
$manager->purview();
$manager->popedom();