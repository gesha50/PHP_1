<?php
session_start();
$id_user = session_id();
include "../models/db.php";
if(isset($_POST['order'])){
    if($_POST['typeSend'] == 0){
        $delivery = "Самовывоз";
    } elseif ($_POST['typeSend'] == 1){
        $delivery = "Курьерская";
    }
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    if($_POST['persons']){
        $persons = $_POST['persons'];
    } else {
        $persons = '0';
    }
    if($_POST['pay'] == 0){
        $pay = "Наличные";
    } elseif ($_POST['pay'] == 1){
        $pay = "Кредитная карта";
    }
    if($_POST['desiredTime']){
        $desiredTime = $_POST['desiredTime'];
    } else {
        $desiredTime = '-';
    }
    if($_POST['money']){
        $money = $_POST['money'];
    } else {
        $money = 0;
    }
    if($_POST['address']){
        $address = $_POST['address'];
    } else {
        $address = '-';
    }
    if($_POST['comment']){
        $comment = $_POST['comment'];
    } else {
        $comment = '-';
    }
    $sql = "INSERT INTO Orderer (delivery, name, telefon, person, money, date_time, `change`, adress, `comment`) 
            VALUES ('%s','%s','%s','%d','%s','%s','%d','%s','%s')";
    $query = sprintf($sql,
        mysqli_real_escape_string($connect, $delivery),
        mysqli_real_escape_string($connect, $name),
        mysqli_real_escape_string($connect, $phone),
        mysqli_real_escape_string($connect, $persons),
        mysqli_real_escape_string($connect, $pay),
        mysqli_real_escape_string($connect, $desiredTime),
        mysqli_real_escape_string($connect, $money),
        mysqli_real_escape_string($connect, $address),
        mysqli_real_escape_string($connect, $comment));

    $res = mysqli_query($connect, $query);
    $sqlCounter = "Select max(`id`) as maxid from Orderer";
    $resCounter = mysqli_query($connect, $sqlCounter);
    while($dataCounter = mysqli_fetch_assoc($resCounter)){
        $order_id = $dataCounter['maxid'];
    }
    copyFromCartToManager($connect,$id_user,$order_id);

    header('location: ../public/orderEnd.php?counter='.$order_id);
}

function copyFromCartToManager ($connect,$id_user,$order_id) {
    $sql1 = "select * from cart where user ='%s'";
    $query1 = sprintf($sql1, $id_user);
    $res1 = mysqli_query($connect, $query1);
    while($data1 = mysqli_fetch_assoc($res1)){
        $sql2 = "insert into orderToManager (id_good, `counter`,id_user, order_id) values ('%d','%d','%s','%s')";
        $query2 = sprintf($sql2,
            mysqli_real_escape_string($connect, $data1['id_good']),
            mysqli_real_escape_string($connect, $data1['counter']),
            mysqli_real_escape_string($connect, $id_user),
            mysqli_real_escape_string($connect, $order_id));
        $res2 = mysqli_query($connect, $query2);
    }
    $sql3 = "delete from cart where user ='%s'";
    $query3 = sprintf($sql3, mysqli_real_escape_string($connect, $id_user));
    $res3 = mysqli_query($connect, $query3);
}
