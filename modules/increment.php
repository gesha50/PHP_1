<?php
include 'db.php';

$id = (int)$_GET['id'];

$sql = 'update cart set counter=counter+1 where cart_id='.$id;
mysqli_query($connect,$sql);
header('location: ../public/cart.php');

?>
