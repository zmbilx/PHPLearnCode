<table>
    <form action="" method="post" enctype="multipart/form-data">
        <tr>
            <td width="150" height="30" align="right" valign="middle">请选择上传的文件:</td>
<!--            上传文件的文件域，type 类型为file-->
            <td width="250"><input type="file" name="upfile"/></td>
<!--            提交按扭-->
            <td width="100"><input type="submit" name="submit" value="上传"/></td>
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
//处理表单返回的结果

if (!empty($_FILES)){
    foreach ($_FILES['upfile'] as $name=>$value){
        echo $name.' = '.$value.'<br>';
    }
}