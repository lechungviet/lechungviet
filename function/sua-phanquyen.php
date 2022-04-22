<?php
    require_once("../xuly.php")
?>  
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<?php
    if(isset($_GET["email"]))
    {
        $email=$_GET["email"];
        $quyen=$_GET["quyenmoi"];
        if($email==""||$quyen==""){
            header("location: ../index.php");
        }
        else{
            $sql="update dangnhap set quyen='$quyen' where email='$email'";
            execute($sql);
        }
        header("location: ../quantri-phanquyen.php");
    }
?>

