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
        echo 'ʹ��serialize()���������񱣴����������Դ�ŵ��ı��ļ������ݾݵȵط�<br>';
        return array('type');
    }

    public function __wakeup(){
        // TODO: Implement __wakeup() method.
        echo '����Ҫ������ʱ��ʹ��unserialize()�����������л����ַ������в���������ת���ض���.';
    }
}

$myBook = new SprotObject();
$i = serialize($myBook);
echo '���л�����ַ�����'.$i.'<br>';
$reBook = unserialize($i);
echo '<br>��ԭ��ĳ�Ա����:'.$reBook->getType();