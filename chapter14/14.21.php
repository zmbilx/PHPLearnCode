<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 20:54
 */

class SprotObject{
    private $type = 'DIY';
    public function getType(){
        return $this->type;
    }

    public function __sleep(){
        // TODO: Implement __sleep() method.
        echo '使用serialize()函数将对像保存起来，可以存放到文本文件，数据据等地方<br>';
        return array('type');
    }

    public function __wakeup(){
        // TODO: Implement __wakeup() method.
        echo '当需要该数据时，使用unserialize()函数对已序列化的字符串进行操作，将其转换回对像.';
    }
}

$myBook = new SprotObject();
$i = serialize($myBook);
echo '序列化后的字符串：'.$i.'<br>';
$reBook = unserialize($i);
echo '<br>还原后的成员变量:'.$reBook->getType();