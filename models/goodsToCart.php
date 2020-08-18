<?php session_start();
include 'db.php';
$id_user = session_id();
$sql = "SELECT * from cart,goods where cart.id_good = goods.id and cart.user='$id_user'";
$res = mysqli_query($connect, $sql);
?>