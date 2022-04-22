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
        $id=$_POST["id"];
        $tennsx=$_POST["tennsx"];
        if($tennsx==""){
            phpAlert("Sửa không thành công, không thể bỏ trống tên nhà sản xuất");
        }
        else{
            $sql="UPDATE nhasx SET tennsx = '$tennsx' WHERE mansx = $id";
            execute($sql);
            header("location: ../quantri-hangsx.php");
        }
    }
?>

