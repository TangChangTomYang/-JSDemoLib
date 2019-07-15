<?php 


	//php 中告诉浏览器 按照 哪种文本编码解析
	header('content-type:text/html;charset=utf-8');   

	/*
		多行注释
	*/

	// 当行注释

	// PHP 中定义变量通通 使用$ 开头
	$num = 1; // 整型
	$str = '123'; //字符串
	$bool = true; // 布尔
	$float = 3.14; // 小数
	// php 中输出, 使用echo 关键字
	echo 'hello php';
	echo $num;
	echo $str;
	echo $bool;
	echo $float;


	echo  '<br>';  // php 中换行和网页中一样

	echo '<input type="button" value="点我试试">'


 ?>