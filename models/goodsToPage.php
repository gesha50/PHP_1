<?php
    include 'db.php';
    $sql = "select * from goods";
    $res = mysqli_query($connect, $sql);
?>