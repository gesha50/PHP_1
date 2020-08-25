<?php
include 'db.php';
$counter = (int)$_GET['counter'];
$id = (int)$_GET['id'];
if ($counter == 1){
    $sql = 'delete from cart where cart_id='.$id;
    mysqli_query($connect,$sql);
    echo 0;

} else {
    $sql = 'update cart set counter=counter-1 where cart_id='.$id;
    mysqli_query($connect,$sql);
    $sql1 = 'select counter from cart where cart_id='.$id;
    $res = mysqli_query($connect,$sql1);
    $data = mysqli_fetch_assoc($res);
    echo $data['counter'];
}

//header('location: ../public/cart.php');
