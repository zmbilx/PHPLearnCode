<!--�ϴ��ļ���-->
<form action="" method="post" enctype="multipart/form-data">
    <table id='up_table' border="1" bgcolor="f0f0f0">
        <tbody id="auto">
        <tr id="show">
            <td>�ϴ��ļ�</td>
            <td><input name="u_file[]" type="file"/></td>
        </tr>
        <tr>
            <td>�ϴ��ļ�</td>
            <td><input name="u_file[]" type="file"/></td>
        </tr>
        </tbody>
        <tr>
            <td colspan="4"><input type="submit" value="�ϴ�"/></td>
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
// �жϱ����Ƿ�$_FILES�Ƿ�Ϊ��
var_dump($_FILES);

if (!empty($_FILES['u_file']['name'])){
    $file_name = $_FILES['u_file']['name'];
    $file_tmp_name = $_FILES['u_file']['tmp_name'];
    for ($i=0; $i<count($file_name); $i++){
        if ($file_name[$i] !=''){
            move_uploaded_file($file_tmp_name[$i],$i.$file_name[$i]);
            echo '�ļ�'.$file_name[$i].'�ϴ��ɹ�������Ϊ'.$i.$file_name[$i].'<br>';
        }
    }
}
