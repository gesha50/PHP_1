<?php
include 'db.php';
$id = (int)$_GET['id'];
$sql = "SELECT title, counter, price from orderToManager 
inner JOIN goods ON orderToManager.id_good = goods.id
WHERE orderToManager.order_id =$id";
$res = mysqli_query($connect, $sql);
$row_cnt = mysqli_num_rows($res);
$goods = array();
for ($i = 0; $i < $row_cnt; $i++) {
    $row = mysqli_fetch_assoc($res);
    $goods[] = $row;
}
echo json_encode($goods);
