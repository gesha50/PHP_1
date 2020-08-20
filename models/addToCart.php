<?php session_start();
include 'db.php';

$id_good = (int)$_GET['id'];
$counter = 1;
$id_user = session_id();
//echo $id_user;

$sql1 = "SELECT cart.id_good from cart,goods where cart.id_good = goods.id and cart.user='$id_user'";
$res1 = mysqli_query($connect, $sql1);
$n = mysqli_num_rows($res1);
for($i = 0; $i < $n; $i++){
    $res2[] = mysqli_fetch_assoc($res1);
}
$isItemInCart = false;
foreach ($res2 as $item) {
    if($id_good == $item['id_good']){
        $isItemInCart = true;
    }
}
if(!$isItemInCart) {
    $sql = "INSERT INTO cart (id_good, counter, user) VALUES ($id_good, $counter, '$id_user')";
    $res = mysqli_query($connect, $sql);
}
header('location: ../public/catalog.php');
?>