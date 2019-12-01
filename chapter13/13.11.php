<!--上传文件表单-->
<form action="" method="post" enctype="multipart/form-data">
    <table id='up_table' border="1" bgcolor="f0f0f0">
        <tbody id="auto">
        <tr id="show">
            <td>上传文件</td>
            <td><input name="u_file[]" type="file"/></td>
        </tr>
        <tr>
            <td>上传文件</td>
            <td><input name="u_file[]" type="file"/></td>
        </tr>
        </tbody>
        <tr>
            <td colspan="4"><input type="submit" value="上传"/></td>
        </tr>
    </table>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 18:29
 */
// 判断变量是否$_FILES是否为空
var_dump($_FILES);

if (!empty($_FILES['u_file']['name'])){
    $file_name = $_FILES['u_file']['name'];
    $file_tmp_name = $_FILES['u_file']['tmp_name'];
    for ($i=0; $i<count($file_name); $i++){
        if ($file_name[$i] !=''){
            move_uploaded_file($file_tmp_name[$i],$i.$file_name[$i]);
            echo '文件'.$file_name[$i].'上传成功。更名为'.$i.$file_name[$i].'<br>';
        }
    }
}
