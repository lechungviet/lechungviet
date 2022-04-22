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
        $tennsx=$_POST["tennsx"];
        if($tennsx==""){
            phpAlert("Thêm không thành công, không thể bỏ trống tên nhà sản xuất");
        }
        else{
            $sql="insert into nhasx values('null','$tennsx')";
            execute($sql);
            header("location: ../quantri-hangsx.php");
        }
    }
?>

