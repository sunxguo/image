<?php
	$file = 'BeijingOfficeBillboard.ai';
	$content = file_get_contents($file); //读取文件中的内容
	preg_match("/(<xmpGImg:width>)(.+)(<\/xmpGImg:width)/",$content,$image);
	echo "width:".$image[2];
	preg_match("/(<xmpGImg:height>)(.+)(<\/xmpGImg:height)/",$content,$image);
	echo "height:".$image[2];
	preg_match("/(<xmpGImg:format>)(.+)(<\/xmpGImg:format)/",$content,$image);
	echo "format:".$image[2];
	preg_match("/(<xmpGImg:image>)(.+)(<\/xmpGImg:image)/",$content,$image);
    imagejpeg($image[2], 'thumbnail.jpg', 70);
	echo "image:<img src='thumbnail.jpg'>";
	// 生成新图片
?>