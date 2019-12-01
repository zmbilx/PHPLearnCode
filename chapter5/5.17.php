<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 21:33
 */
$content = "白领女子公寓，温馨南行200米，交通便利，亲情化专人管理，您理想的选择。";
$str = "女子公寓";
echo str_ireplace($str,'<font color="#FF0000">'.$str.'</font>',$content);