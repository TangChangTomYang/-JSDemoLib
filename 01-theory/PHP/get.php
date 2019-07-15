<?php 
	// 设置文件编码
	header('content-type:text/html;charset=utf-8');
	echo "我是 get.php 的内容";


	/*
		php 中获取get请求参数
		1> PHP 内部为我们 定义了一个超全局对象 $_GET, 是一个 关系型数组. eg: $arrayName = array('name' => 'zhangsan','age'=> 18 );
		2> 通过 $_GET['KEY'] 即可获取数据,  key是提交的时候表单填写的 input name 值

		注意点: 
		通过 $_GET['key'] 去获取指定的参数值, 如果 key 是一个不存在的值, 那么会报警告错误
		即, key 必须是存在的值
	*/
	echo "<br>";
	echo  'name: '.$_GET['usr'];
	echo "<br>"; 
	echo  'pwd: '.$_GET['pwd'];



	echo '<h1>'.$_GET['usr'] .'欢迎您你' . '</h1>';

 ?>