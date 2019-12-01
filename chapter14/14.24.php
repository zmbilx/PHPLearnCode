<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/1
 * Time: 21:18
 */

class MsubStr{
    function csubstr($str, $start, $len){       // $srart是字符串的起始位置，$len是要截取的长度
        $strlen = $start + $len;
        $tmpstr = "";
        for ($i = 0; $i < $strlen; $i++) {
            // ord ? 返回字符的 ASCII 码值
            if (ord(substr($str, $i, 1)) > 0xa0) {   // 如果字符串中首两个字节的ASCII序数值大于0xa0,则表示为汉字
                $tmpstr .= substr($str, $i, 2);   // 如果是汉字，则取出两位字符，赋值到$tmpstr
                $i++;                           // 因为取出了两个字节，所以还需要再加一次
            } else {      // 如果不是汉字，则取出一个字符
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
                $string = "关注明日科技，关注PHP从入门到精通改版!";
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
            $string = "关注明日科技，关注PHP从入门到精通改版!";
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
            $strs = "关注PHP编程词典！";
            if(strlen($strs)>30){
                echo $mc->csubstr($strs,"0","20");
            }else{
               echo $strs;
            }
            ?>
        </td>
    </tr>
</table>
