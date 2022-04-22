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
        $sql="delete from mathang WHERE mamh = $id";
        execute($sql);
        header("location: ../quantri-mathang.php");
    }
?>

