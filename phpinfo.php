<?php
	$im = new Imagick('1.psd');
	$im->setImageIndex(0);
	$im->setIteratorIndex(0);
	$im->stripImage(); //去除图片信息
	$im->setImageCompressionQuality(80); //图片质量
	$im->writeImage('1.jpg');
?>