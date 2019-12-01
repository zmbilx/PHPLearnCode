<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 21:27
 */
$str2 = "某某";
$str1 = "**";
$str = '  某某公司是通过工信部和山东省通信管理局认证的业界领先的互联网基础服务提供商之一,
        中国互联网协会会员、山东互联网协会会员、山东省软件协会会员。';
echo str_ireplace($str2,$str1,$str);            // 替换字符串，str2为待替换的字符串 str1为打算替换的字符串 str为寻找的字符串
                                                // 区分大小写
//str_treplace()  此函数不区分大小写