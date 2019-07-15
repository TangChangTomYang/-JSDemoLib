<?php 


	//php 中告诉浏览器 按照 哪种文本编码解析
	header('content-type:text/html;charset=utf-8');   

	 // php 中输入的输出
	$_myArr  = array(
					array('张三', '李四', '王二', '麻子' ),
					array('成都', '北京', '上海', '广州' ) 
					);



	$_myArr2  = array(
					// 注意: 关系数组 中 不同的对象, key 不能相同
					array('name1'=>'张三1', 'name2'=>'李四1', 'name3'=>'王二1', 'name4'=>'麻子1' ),
					array('age1'=>'成都', 'age2'=>'北京', 'age3'=>'上海', 'age4'=>'广州' ) 
					);

	 
	echo "<br>"; 
	echo "<br>";
	print_r($_myArr) ; // 这个方法可以将 整个 数组输出, 类似于 javaScript 中的 console.log()

	echo "<br>"; 
	echo "<br>"; 
	echo "<br>"; 
	print_r($_myArr2) 
 ?>