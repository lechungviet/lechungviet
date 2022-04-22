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
        $id=$_POST["id"];
        $tenlh=$_POST["tenlh"];
        if($tenlh==""){
            phpAlert("Sửa không thành công, không thể bỏ trống tên nhà sản xuất");
        }
        else{
            $sql="UPDATE loaihang SET tenlh = '$tenlh' WHERE malh = $id";
            execute($sql);
            header("location: ../quantri-loaihang.php");
        }
    }
?>

