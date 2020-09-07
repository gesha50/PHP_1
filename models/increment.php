<?php
include 'db.php';

$id = (int)$_GET['id'];

$sql = "update cart set counter=counter+1 where cart_id=$id";
mysqli_query($connect,$sql);
$sql1 = "select counter from cart where cart_id=$id";
$data = mysqli_fetch_assoc(mysqli_query($connect,$sql1));

echo $data['counter'];
//header('location: ../public/cart.php');

