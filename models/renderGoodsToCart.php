<?php
session_start();
include 'db.php';
$id_user = session_id();
$sql = "SELECT * from cart,goods where cart.id_good = goods.id and cart.user='$id_user'";
$res = mysqli_query($connect, $sql);
$row_cnt = mysqli_num_rows($res);
$goods = array();
for ($i = 0; $i < $row_cnt; $i++) {
    $row = mysqli_fetch_assoc($res);
    $goods[] = $row;
}
echo json_encode($goods);