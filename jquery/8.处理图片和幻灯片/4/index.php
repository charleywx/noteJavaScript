<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$target_width = $target_height = 140;     // 定义剪裁的目标宽度与高度
	$jpeg_quality = 90;       // 定义图片质量

	$src = 'demo_files/011.jpg';              // 定义源图片位置
	$img_r = imagecreatefromjpeg($src);       // 创建图像
	$dst_r = ImageCreateTrueColor( $target_width, $target_height );   // 创建真彩图像资源

	imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],     // 重新采样拷贝部分图像并调整大小
	$target_width,$target_height,$_POST['w'],$_POST['h']);

	header('Content-type: image/jpeg');
	imagejpeg($dst_r,null,$jpeg_quality);       // 创建剪切之后的图像

	exit;
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <title>jQuery+Jcrop+PHP实现图片剪裁</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <script src="../js/jquery-1.11.1.min.js"></script>
  <script src="../js/jquery.Jcrop.js"></script>
  <link rel="stylesheet" href="demo_files/main.css" type="text/css" />
  <link rel="stylesheet" href="demo_files/demos.css" type="text/css" />
  <link rel="stylesheet" href="../css/jquery.Jcrop.css" type="text/css" />

<script type="text/javascript">

  $(function(){

    $('#cropbox').Jcrop({
      aspectRatio: 1,
      onSelect: updateCoords
    });

  });

  function updateCoords(c)
  {
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

  function checkCoords()
  {
    if (parseInt($('#w').val())) return true;
    alert('Please select a crop region then press submit.');
    return false;
  };

</script>
<style type="text/css">
  #target {
    background-color: #ccc;
    width: 500px;
    height: 330px;
    font-size: 24px;
    display: block;
  }


</style>

</head>
<body>

<div class="container">
<div class="row">
<div class="span12">
<div class="jc-demo-box">

<div class="page-header">

<h1>jQuery+Jcrop+PHP实现图片剪裁</h1>
</div>

		<!-- This is the image we're attaching Jcrop to -->
		<img src="demo_files/011.jpg" id="cropbox" />

		<!-- This is the form that our event handler fills -->
		<form action="index.php" method="post" onsubmit="return checkCoords();">
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
			<input type="submit" value="剪裁图片" class="btn btn-large btn-inverse" />
		</form>

	</div>
	</div>
	</div>
	</div>
	</body>

</html>
