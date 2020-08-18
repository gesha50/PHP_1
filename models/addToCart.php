<?php
include 'db.php';

$id_good = (int)$_GET['id'];
$counter = 1;
// $id_user = ;
if($id_good) {
    $sql = "INSERT INTO cart (id_good, counter) VALUES ($id_good, $counter)";
    $res = mysqli_query($connect, $sql);
}
header('location: ../public/catalog.php');

?>