<?php
include 'db.php';
$sql = "SELECT * from cart,goods where cart.id_good = goods.id";
$res = mysqli_query($connect, $sql);
?>