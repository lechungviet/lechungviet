<?php
    require_once("../xuly.php");
?>
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
//kiểm tra thông đăng nhập bằng tên đăng nhập và mật khẩu và trạng thái active (0=ko thể đn, 1= có thể đăng nhập)
function kiemtradangnhap($email,$password){
    $sql="select *from dangnhap where email='$email' and password='$password'";
    $check=executeResult($sql);
    if(count($check)>=1){
        return true;
    }
    else return false;
}
//lấy thông tin user
function getInforUser($email){
    $sql="select *from nguoidung where email='$email'";
    $check=executeResult($sql);
    return $check;
}
function getQuyen($email){
    $sql="select *from dangnhap where email='$email'";
    $check=executeResult($sql);
    return $check;
}
?>
<?php
    if(isset($_POST["btn-login"]))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
        if($email==""||$password==""){
            $_SESSION['erro-login']="Vui lòng nhập đầy đủ thông tin";
            header("location: ../dangnhap.php");
        }
        elseif(!kiemtradangnhap($email,$password)){
            $_SESSION['erro-login']="Lỗi, sai tên đăng nhập hoặc mật khẩu";
            header("location: ../dangnhap.php");
        }
        elseif(kiemtradangnhap($email,$password)){
            unset($_SESSION['erro-login']);
            $_SESSION['login']= getInforUser($email);
            $user=getQuyen($email);
            if($user[0]['quyen']!=0)
                header("location: ../quantrihethong.php");
            else 
                header("location: ../index.php");
        }
        
    }
    if(isset($_POST["dangxuat"]))
    {
        session_destroy();
        header("location: ../index.php");
    }
?>
