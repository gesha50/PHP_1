<?php

include 'db.php';

$id = (int)$_GET['id'];

$sql = "select * from goods where id=".$id;
$res = mysqli_query($connect, $sql);


?>