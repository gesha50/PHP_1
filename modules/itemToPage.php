<?php

include 'db.php';

$id = $_GET['id'];

$sql = "select * from goods where id=".$id;
$res = mysqli_query($connect, $sql);


?>