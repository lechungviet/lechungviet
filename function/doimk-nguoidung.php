<?php
    require_once("../xuly.php");
?>
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<?php
    if(isset($_SESSION['login']))
        $user=$_SESSION['login'];
    else 
        $user='';
    if(isset($_POST["capnhat"]))
    {
        $iduser=$user[0]['email'];
        // $iduser=$_POST["iduser"];
        // $email=$_POST["email"];
        // $hoten=$_POST["hoten"];
        // $diachi=$_POST["diachi"];
        // $sodt=$_POST["sodt"];
        $mkcu=$_POST["mkcu"];
        $mkmoi=$_POST["mkmoi"];
        $xnmkmoi=$_POST["xnmkmoi"];
        if(laymkcu($iduser)!=$mkcu){
            echo 'Bạn đã nhập sai mật khẩu cũ, vui lòng nhập đúng mật khẩu cũ';
            die();
        }
        else if($mkmoi!=$xnmkmoi){
           /* $sql="update nguoidung set hoten='$hoten',diachi='$diachi',sodt='$sodt' where iduser='$iduser'";
            execute($sql);*/
            echo 'Mật khẩu mới phải trùng khớp với mật khẩu nhập lại';
            die();
            
        }
        else if($mkmoi===$xnmkmoi){
            $sqldn="update dangnhap set password='$mkmoi' where email='$iduser'"; 
            execute($sqldn);
            unset($_SESSION['erro']);
            header("location: ../index.php");
        }
    }
     if(isset($_POST["dangxuat"]))
    {
        session_destroy();
        header("location: ../index.php");
    }
?>
