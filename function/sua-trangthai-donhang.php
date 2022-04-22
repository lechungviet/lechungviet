<?php
    require_once("../xuly.php")
?>  
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<?php
    $id=$_GET["id"];
    if($id!=""){
        $sql="update donhang set trangthai= '1' WHERE iddonhang= $id";
        execute($sql);
        header("location: ../quantri-dondathang.php");
    }
?>

