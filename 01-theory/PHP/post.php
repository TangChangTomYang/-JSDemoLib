<?php 
	// 设置文件编码
	header('content-type:text/html;charset=utf-8');
	echo "我是 post.php 的内容";


	/*
		php 中获取POST请求参数
		1> PHP 内部为我们 定义了一个超全局对象 $_POST, 是一个 关系型数组. eg: $arrayName = array('name' => 'zhangsan','age'=> 18 );
		2> 通过 $_POST['key'] 即可获取数据,  key是提交的时候表单填写的 input name 值

		注意点: 
		通过 $_POST['key'] 去获取指定的参数值, 如果 key 是一个不存在的值, 那么会报警告错误
		即, key 必须是存在的值
	*/
	echo "<br>";
	echo  'name: '.$_POST['usr'];
	echo "<br>"; 
	echo  'pwd: '.$_POST['pwd'];



	echo '<h1>'.$_POST['usr'] .'欢迎您你' . '</h1>';



	/*
	 无论是通过全局变量 $_GET['key'] 或者 $_POST['key'] 
	 来获取 对应 数组中的 值 value 时, 只要 key 是不存在的,
	 那么就会报警告
	 为了防止错误, 我们这样做

	 1> 使用 array_key_exists(key, 数组) 函数来进行判断
		key : 要检测的字符串
		数组 : 被检验的数组

	 if(array_key_exists(key, $_GET)){// key 存在
		//读取 $_GET[key] 的内容
	 }
	 else{
		//key 不存在, 就不读取
	 }

	*/


 ?>