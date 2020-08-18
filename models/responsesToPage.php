<?php
    include 'db.php';
    $sql = "select * from responses";
    $res = mysqli_query($connect, $sql);
?>