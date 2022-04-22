<?php
	require_once ('ketnoi.php');
	session_start();
	function execute($sql) {
		//create connection toi database
		$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

		//query
		mysqli_query($conn, $sql);

		//dong connection
		mysqli_close($conn);
	}
	/**
	 * su dung cho lenh select => tra ve ket qua
	 */
	function executeResult($sql) {
		//create connection toi database
		$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

		//query
		$resultset = mysqli_query($conn, $sql);
		$list      = [];
		while ($row = mysqli_fetch_array($resultset, 1)) {
			$list[] = $row;
		}

		//dong connection
		mysqli_close($conn);
		return $list;
	}
	function layTenNSX($id){
		$sql="select tennsx from nhasx where mansx='".$id."' ";
		$kq = executeResult($sql);
		return $kq[0]["tennsx"];
	}
	function layTenLoaiHang($id){
		$sql="select tenlh from loaihang where malh='".$id."' ";
		$kq = executeResult($sql);
		return $kq[0]["tenlh"];
	}
	function layTenMatHang($id){
		$sql="select tenmh from mathang where mamh='".$id."' ";
		$kq = executeResult($sql);
		return $kq[0]["tenmh"];
	}
	function layDungTich($id){
		$sql="select soluong from mathang where mamh='".$id."' ";
		$kq = executeResult($sql);
		return $kq[0]["soluong"];
	}
	function layMoTa($id){
		$sql="select mota from mathang where mamh='".$id."' ";
		$kq = executeResult($sql);
		return $kq[0]["mota"];
	}
	function layGia($id){
		$sql="select gia from mathang where mamh='".$id."' ";
		$kq = executeResult($sql);
		return $kq[0]["gia"];
	}
	function layHinh($id){
		$sql="select hinh from mathang where mamh='".$id."' ";
		$kq = executeResult($sql);
		return $kq[0]["hinh"];
	}
	function layIDNsx($id){
		$sql="select mansx from mathang where mamh='".$id."' ";
		$kq = executeResult($sql);
		return $kq[0]["mansx"];
	}
	function layIDLh($id){
		$sql="select malh from mathang where mamh='".$id."' ";
		$kq = executeResult($sql);
		return $kq[0]["malh"];
	}
	function getUser($id){
		$sql="select *from nguoidung where iduser='$id'";
		$check=executeResult($sql);
		return $check;
	}
	function loadCombo($email,$quyenhientai){
		echo'
		<select name="" id="" onchange="location = this.value;" class="cbquyen">
		';
		if($quyenhientai==0)
		{
			echo '
			<option value="./function/sua-phanquyen.php?email='.$email.'&quyenmoi='."0".'" selected>'."Quyền mật định".'</option>
			';
			echo '
			<option value="./function/sua-phanquyen.php?email='.$email.'&quyenmoi='."1".'">'."Quyền admin".'</option>
			';
		}
		else if($quyenhientai!=0){
			echo '
			<option value="./function/sua-phanquyen.php?email='.$email.'&quyenmoi='."1".'" selected>'."Quyền admin".'</option>
			';
			echo '
			<option value="./function/sua-phanquyen.php?email='.$email.'&quyenmoi='."0".'">'."Quyền mật định".'</option>
			';
		}
		echo'
		</select>
		';
	}
	function last_id(){
		$sqlconut="select max(mamh) as id from mathang";
		$num = executeResult($sqlconut);
		return $num[0]["id"];
	}
	function laymkcu($id){
		$sqlconut="select password from dangnhap where email='$id'";
		$num = executeResult($sqlconut);
		return $num[0]["password"];
	}
?>

