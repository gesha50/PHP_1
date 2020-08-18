<?php session_start();
include 'db.php';

$id_good = (int)$_GET['id'];
$counter = 1;
$id_user = session_id();
//echo $id_user;
if($id_good) {
    $sql = "INSERT INTO cart (id_good, counter, user) VALUES ($id_good, $counter, '$id_user')";
    $res = mysqli_query($connect, $sql);
}
//echo $sql;
header('location: ../public/catalog.php');

?>