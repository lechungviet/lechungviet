<?php
    require_once("../xuly.php");
?>
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<?php
    if(isset($_POST["submit"]))
    {
        $email=$_POST["email"];
        $hoten=$_POST["hoten"];
        $diachi=$_POST["diachi"];
        $sodt=$_POST["sodt"];
        $password=$_POST["password"];
        if($email==""||$hoten==""||$sodt==""||$password==""||$diachi==""){
            $_SESSION['erro']="Vui lòng nhập đầy đủ thông tin";
            header("location: ../dangki-taikhoan.php");
        }
        else{
            $sql="insert into nguoidung values('null','$email','$hoten','$diachi','$sodt')";
            execute($sql);
            $sqldn="insert into dangnhap values('$email','$password','0')"; //quền 0: là quyền của người dùng bình thường. Quyền 1 là quyền admin
            execute($sqldn);
            unset($_SESSION['erro']);
            header("location: ../dangnhap.php");
        }
    }
?>
