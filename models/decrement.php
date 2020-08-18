<?php
include 'db.php';
$counter = (int)$_GET['counter'];
$id = (int)$_GET['id'];
if ($counter == 1){
    $sql = 'delete from cart where cart_id='.$id;
} else {
    $sql = 'update cart set counter=counter-1 where cart_id='.$id;
}
mysqli_query($connect,$sql);
header('location: ../public/cart.php');



?>