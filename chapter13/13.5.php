<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 16:57
 */

$filepath = "05.txt";
$str = "����ɴ���׷�� ֻ�ǵ�ʱ���Ȼ<br>";
echo '��fwrite����д���ļ�:';
$fopen = fopen($filepath,'wb') or die('�ļ�������');
fwrite($fopen,$str);
fclose($fopen);
readfile($filepath);

echo "<p>��file_put_contents ����д���ļ�:";
file_put_contents($filepath, $str);         //�ͻ��ǰ��Ķ����������
readfile($filepath);


