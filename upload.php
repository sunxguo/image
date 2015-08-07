<?php
	header('Cache-Control:no-cache,must-revalidate');  
	header('Pragma:no-cache'); 
//	error_reporting(E_ERROR | E_WARNING);
 	//原文件名
	echo $file_name = $_FILES["image"]['name'];
	echo '<br>';
	//服务器上临时文件名
	echo $tmp_name = $_FILES["image"]['tmp_name'];
	echo '<br>';
	//文件大小
	echo $file_size = $_FILES["image"]['size'];
	echo '<br>';
	if (file_exists($file_name)){
		echo  $file_name. "已经存在，请更换文件名. ";
    }
    else{
		move_uploaded_file($tmp_name,$file_name);
		$im = new Imagick($file_name);
		$im->setImageIndex(0);
		$im->setIteratorIndex(0);
		$im->stripImage(); //去除图片信息
		$im->setImageCompressionQuality(80); //图片质量
		$im->writeImage('upload.jpg');
		$im->clear();
		echo "<img src='upload.jpg'/>";
    }
	
?>