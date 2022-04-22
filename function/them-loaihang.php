<?php
    require_once("../xuly.php")
?>  
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<?php
    if(isset($_POST["submit"]))
    {
        $tenlh=$_POST["tenlh"];
        if($tenlh==""){
            phpAlert("Thêm không thành công, không thể bỏ trống tên loại hàng");
        }
        else{
            $sql="insert into loaihang values('null','$tenlh')";
            execute($sql);
            header("location: ../quantri-loaihang.php");
        }
    }
?>

