<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/25
 * Time: 19:02
 */
$text="ףȫ�����򿪷���Ա�ڱ��֮·��һ����˳�����ڷ�������̩�ļ�ƽ���帣����������˳���Ǹ��հ˷����ƾž�ͬ��ʮȫʮ��
���¿���ǧ��˳�����¼���PHP���һ����.";
if (strlen($text)>30){
    echo substr($text,0,30)."......";
}else{
    echo $text;
}