<?php
//	error_reporting(E_ERROR | E_WARNING);
 	//原文件名
	$file_name = $_FILES["file"]['name'];
	//服务器上临时文件名
	$tmp_name = $_FILES["file"]['tmp_name'];
	//文件大小
	$file_size = $_FILES["file"]['size'];
	move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
	echo $_FILES["file"]["name"];
/*
	$im = new Imagick($_FILES["file"]["name"]);
	$im->setImageIndex(0);
	$im->setIteratorIndex(0);
	$im->stripImage(); //去除图片信息
	$im->setImageCompressionQuality(80); //图片质量
	$im->writeImage('upload.jpg');
	echo "<img src='upload.jpg'/>";*/
?>