<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 21:18
 */

class MsubStr{
    function csubstr($str, $start, $len){       // $srart���ַ�������ʼλ�ã�$len��Ҫ��ȡ�ĳ���
        $strlen = $start + $len;
        $tmpstr = "";
        for ($i = 0; $i < $strlen; $i++) {
            // ord ? �����ַ��� ASCII ��ֵ
            if (ord(substr($str, $i, 1)) > 0xa0) {   // ����ַ������������ֽڵ�ASCII����ֵ����0xa0,���ʾΪ����
                $tmpstr .= substr($str, $i, 2);   // ����Ǻ��֣���ȡ����λ�ַ�����ֵ��$tmpstr
                $i++;                           // ��Ϊȡ���������ֽڣ����Ի���Ҫ�ټ�һ��
            } else {      // ������Ǻ��֣���ȡ��һ���ַ�
                $tmpstr .= substr($str, $i, 2);
            }
        }
        return $tmpstr;
    }
}
$mc = new MsubStr();
?>

<table>
    <tr>
        <td>
            <?php
                $string = "��ע���տƼ�����עPHP�����ŵ���ͨ�İ�!";
                if (strlen($string)>10){
                   echo substr($string,0,12).'...';
                }else{
                    echo $string;
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $string = "��ע���տƼ�����עPHP�����ŵ���ͨ�İ�!";
            if (strlen($string)>10){
                echo $mc->csubstr($string,"0","9");
            }else{
                echo $strs;
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $strs = "��עPHP��̴ʵ䣡";
            if(strlen($strs)>30){
                echo $mc->csubstr($strs,"0","20");
            }else{
               echo $strs;
            }
            ?>
        </td>
    </tr>
</table>
