<body>
	<!DOCTYPE html>
	<html>
	<head>
		<title>QLBH</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">	
<body>
	<?php require_once("xuly.php"); ?>
	<div id ="header">
		<?php
			include "header.php";
		?>
	</div>
	<div class="khoancach" style="background-color: #F5F5DC;"></div>
	<div id ="menu">
		<?php
			include "menu.php";
		?>
	</div>
	<div class="khoancach" style="background-color: #F5F5DC;"></div>
	<div class="khoancach" style="background-color: #F5F5DC;"></div>
	<!-- <div id ="left">
		
	</div> -->
	<!-- star sliser -->
	<?php
			include "slider.php";
	?>

	<!-- end slider -->

	<div id ="content">
		<?php
			include "content.php";
		?>
	</div>
<!-- danh mục sản phẩm -->
<!--sản phẩm-->

<!-- kết thúc danh mục sản phẩm -->
	<! tin tức-- >
	<h3 style="text-align:left ;color:darkcyan; font-size:30px;" >TIN TỨC MỚI NHẤT </h3>
	<div class="row">
		<div class="column1" style="background-color:white;">
			<video width="400" controls>
				<source src="img/video/Xu hướng thời trang 2020 _ Thời kì _CHUYỂN GIAO_ của thời trang thế giới..mp4" type="video/mp4">
			</video>
		</div>
		<div class="column1" style="background-color:white;">
			<video width="400" controls>
				<source src="img/video/yt1s.com - 7 xu hướng thời trang sẽ lên ngôi năm 2019.mp4" type="video/mp4">
		</div>
		<div class="column1" style="background-color:white;">
			<video width="400" controls>	
		<source src="img/video/yt1s.com - 7 Xu hướng Thời trang Xuân  Hè 2017 mọi Fashionista cần biết I ELLE Việt Nam.mp4" type="video/mp4">
		</div>
	</div>
	<!-- end tin tức -->
	<?php
			include "foodter.php";
	?>
	</body>
	</html>
</body>