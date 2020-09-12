<?php
include 'db.php';

$id_user = session_id();
$sql = "SELECT * from Orderer";
$res = mysqli_query($connect, $sql);
$row_cnt = mysqli_num_rows($res);