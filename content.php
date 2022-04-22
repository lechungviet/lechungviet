<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	
</head>
<?php
	require_once('xuly.php');
?>
<body>
	<div class="khoancach"></div><div class="khoancach"></div><div class="khoancach"></div>
	<?php
		$sql='select *from loaihang'; 
		$nsxlist=executeResult($sql);
		foreach ($nsxlist as $std) {
		echo '
		<h2 style="color :blueviolet">'.mb_strtoupper($std['tenlh'],'UTF-8').'</h2>
		<div class="row" style="width:100%;height:auto;">
		';
			$malh=$std['malh'];
			$sql2="select *from mathang where malh='$malh'"; 
			$listsp=executeResult($sql2);
			foreach ($listsp as $std2) {
				$duongdan="./hinh/".$std2['hinh'];
				$mamh=$std2['mamh'];
				echo'
				<div class="column">
					<a href="xem-san-pham.php?id='.$std2['mamh'].'"><img src="'.$duongdan.'" style="width:450px;height:600px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
					<div class="khoancach"></div>
					<h4 style="color:black ; font-size:15px; text-align:center">'.$std2['tenmh'].'</h4>
						<h5 style="color:red; text-align:center">'.number_format($std2['gia']).'đ</h5>
					</a>
				</div>
				';
			}
		echo '
		</div>
		<div class="khoancach"></div>
		';
		}
	?>
	<div class="khoancach"></div><div class="khoancach"></div><div class="khoancach"></div>
	<!-- partial:index.partial.html -->

<!-- partial -->
  
</body>
</html>

