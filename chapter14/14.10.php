<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 12:12
 */

class Book{
    protected $name = "computer";
}

class LBook extends Book{
    public function showMe(){
        echo '����protected ���εı��������������ǿ���ֱ�ӵ��õġ���$name = '.$this->name;
    }
}

$lBook = new LBook();
$lBook->showMe();
echo '<br> �������ĵط��ǲ����Ե��õģ�����:';
//$lBook->name = 'history';