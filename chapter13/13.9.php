<table>
    <form action="" method="post" enctype="multipart/form-data">
        <tr>
            <td width="150" height="30" align="right" valign="middle">��ѡ���ϴ����ļ�:</td>
<!--            �ϴ��ļ����ļ���type ����Ϊfile-->
            <td width="250"><input type="file" name="upfile"/></td>
<!--            �ύ��Ť-->
            <td width="100"><input type="submit" name="submit" value="�ϴ�"/></td>
        </tr>
    </form>
</table>

<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 18:05
 */
//��������صĽ��

if (!empty($_FILES)){
    foreach ($_FILES['upfile'] as $name=>$value){
        echo $name.' = '.$value.'<br>';
    }
}