<form action="" method="post" enctype="multipart/form-data">
    <input name="up_file" type="file"/>
    <input type="submit" name="submit" value="�ϴ�"/>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 18:19
 */
//�ж��Ƿ����ϴ��ļ�

if (!empty($_FILES['up_file']['name'])){
    // ���ļ���Ϣ��������$fileinfo
    $fileinfo = $_FILES['up_file'];
    // �ж��ļ���С
    if ($fileinfo['size']<1000000 && $fileinfo['size']>0){
        echo $fileinfo['name'];
        move_uploaded_file($fileinfo['tmp_name'],$fileinfo['name']);
        echo '�ϴ��ɹ�';
    }else{
        echo '�ļ�̫���δ֪';
    }
}