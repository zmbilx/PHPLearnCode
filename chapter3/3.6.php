<?php
	echo '����(\$string1)ֱ�Ӹ�ֵΪnull:';
	$string1 = null;
	$string3 = 'str';
	if (!isset($string1)){
		echo '$string1 = null<br>';
	}
	echo '<p>����(\$string2)δ����ֵ: ';
	if (!isset($string2)){
		echo '$string2 = null';
	}
	echo "<p>��unset()����������ı���(\$string3):";
	unset($string3);
	if (!isset($string3)){
		echo '$syring3 = null';
	}


?>