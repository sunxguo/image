<?php
//	error_reporting(E_ERROR | E_WARNING);
 
	$im = new Imagick('logo.psd');
	$im->setImageIndex(0);
	$im->setIteratorIndex(0);
	$im->stripImage(); //去除图片信息
	$im->setImageCompressionQuality(80); //图片质量
	$im->writeImage('logo.jpg');
	echo "<img src='logo.jpg'/>";
?>