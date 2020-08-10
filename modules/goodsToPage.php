<?php
    include 'sqlConnect.php';
    $sql = "select * from goods";
    $res = mysqli_query($connect, $sql);
?>