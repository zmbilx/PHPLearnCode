<form action="" method="post" enctype="multipart/form-data">
    <input name="up_file" type="file"/>
    <input type="submit" name="submit" value="上传"/>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/30
 * Time: 18:19
 */
//判断是否有上传文件

if (!empty($_FILES['up_file']['name'])){
    // 将文件信息赋给变量$fileinfo
    $fileinfo = $_FILES['up_file'];
    // 判断文件大小
    if ($fileinfo['size']<1000000 && $fileinfo['size']>0){
        echo $fileinfo['name'];
        move_uploaded_file($fileinfo['tmp_name'],$fileinfo['name']);
        echo '上传成功';
    }else{
        echo '文件太大或未知';
    }
}