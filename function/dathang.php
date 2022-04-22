<?php
    require_once("../xuly.php");
    if(isset($_SESSION['login']))
        $user=$_SESSION['login'];
    else 
        $user='';
    if($user==''){
        header("location: ../dangnhap.php");
    }
?>
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<?php
    $id=$_POST["mamh"];
    if(isset($_POST["soluong"])){
        $soluong=$_POST["soluong"];
        $iduser=$user[0]['iduser'];
        $size=$_POST["size"];
    }
    else {
        $soluong="0";
        header("location: ../xem-san-pham.php?id=$id");
    }
    if($soluong=="default"){
        phpAlert("Vui lòng nhập vào số lượng sản phẩm");
    }
    if($soluong!="0"&&$soluong!="default"){
        $sql="insert into donhang values('null','$iduser','$id','$size','$soluong',CURDATE(),'0')";
        execute($sql);
        echo'
        <h1><center>Đặt hàng thành công. Đơn hàng của quý khách đã được hệ thống ghi nhận, chúng tôi sẽ xử lý đơn hàng của quý khách trong thời gian nhanh nhất</center></h1>
        <h2><center>Cảm ơn quý khách đã tin tưởng và lựa chọn sản phẩm tại Shop!!!!!!!!</center> </h2>
        <center> <button style="color:blue;width: 150px;height: 50px;background-color: teal; border-radius: 5px;" ><a href="../index.php" style="text-decoration: none; color: white;">Ấn để tiếp tục ...</a></button></center> ';
    }
?>
    