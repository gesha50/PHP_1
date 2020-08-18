
<?php
include_once "../models/db.php";
if($_GET['id']){
    $id = (int)$_GET['id'];
    if($id == 0){
        return false;
    }
    $sql = sprintf("delete from goods where id='%d'", $id);
    $res = mysqli_query($connect, $sql);
    header("Location: ../admin/index.php");
}