<?php require_once ("xuly.php"); ?>
<div id="mymenu">
	<div class="menu"><a href="index.php">Trang chủ</a></div>
	<?php 
			$sql='select *from loaihang'; 
			$nsxlist=executeResult($sql);
			foreach ($nsxlist as $std) { 
				echo '<div class="menu"><a href="xemloaihang.php?id='.$std['malh'].'">'.$std['tenlh'].'</a></div>';
			}
	?>
	<!-- <div class="menu"><a href="gioithieu.php">Giới thiệu</a></div> -->
	<div class="menu"><a href="lienhe.php">Chính sách </a></div>
	
<?php
	if(isset($_SESSION['login']))
		$user=$_SESSION['login'];
	else 
		$user='';
	if(isset($_SESSION['login'])){
		$hoten= explode(" ", $user[0]['hoten']);
		$ten= $hoten[count($hoten)-1];
		echo '<div class ="menu"> <a href=#>Hi -' .$ten.'</a>
		<ul class="sub_menu">
				<li><a href="doimk.php">Đổi mật khẩu</a>
				<li><a href="doittcanhan.php">Đổi thông tin cá nhân</a>
        </ul> 
		</div>';
		echo '  <div class ="menu">
				<a href="taikhoan-dangxuat.php"> Đăng xuất </a>
				</div>';
		echo '  <div class ="menu">
				<a href="quantri-xemdondathang.php"> Đơn hàng </a>
				</div>';
	}
		else echo '<div class ="menu"> <a href="dangnhap.php">Đăng nhập</a> </div>';
			
?>
	


</div>