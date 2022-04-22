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
        $diachi=$_POST["diachi"];
        $sdt=$_POST["sdt"];
       if(isset($_POST["diachi"])&&isset($_POST["sdt"])){
            $sql="update nguoidung set diachi='$diachi',sdt='$sdt' where email='$iduser'";
            execute($sql);
            session_destroy();
            header("location: ../index.php");
        }
    }
     if(isset($_POST["dangxuat"]))
    {
        session_destroy();
        header("location: ../index.php");
    }
?>
