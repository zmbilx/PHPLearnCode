<?php
	$i='显示该行内容';
	echo<<<std
	这和双引号没有什么区别，\$i 同样可以被输出出来。<p>
	\$i 的内容为：$i
std;
?>