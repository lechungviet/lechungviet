<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="mystyle.css">

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<?php
	require_once('xuly.php');
?>
<body>
    <!-- header -->
    <?php require_once("header.php"); ?>
    <?php require_once('menu.php'); ?>
	<div class="khoancach"></div><div class="khoancach"></div><div class="khoancach"></div>
	<?php
        $id=$_GET["id"];
		$sql="select *from loaihang where malh='$id'"; 
		$nsxlist=executeResult($sql);
		foreach ($nsxlist as $std) {
		echo '
		<div class="content">
			<div class="loaisp">| '.$std['tenlh'].'</div>
			<div class="khoancach"></div>
			<div class="sp">
		';
			$malh=$std['malh'];
			$sql2="select *from mathang where malh='$malh'"; 
			$listsp=executeResult($sql2);
			foreach ($listsp as $std2) {
				$duongdan="./hinh/".$std2['hinh'];
				$mamh=$std2['mamh'];
				echo'
				<div class="sanpham">
					<img src="'.$duongdan.'" alt="" id="hinhsp">
					<h2>'.$std2['tenmh'].'</h2>
					<p>'.$std2['mota'].'</p>
					<h2>'.$std2['gia'].'đ</h2>
					<br>
				    <div class="xemthem" onclick="window.location.href=\'xem-san-pham.php?id='.$mamh.'\'"><p>Xem thêm</p></div>
					<br>
					
				</div>
				';
			}
		echo '
			</div>
		</div>
		';
		}
	?>
	<div class="khoancach"></div><div class="khoancach"></div><div class="khoancach"></div>
    <!-- thẻ footer -->
    <?php require_once('foodter.php'); ?>
</body>
</html>

