<?php
include "../models/db.php";
if(isset($_POST['order'])){
    $counter = 0;
    if($_POST['typeSend'] == 0){
        $delivery = "Самовывоз";
    } elseif ($_POST['typeSend'] == 1){
        $delivery = "Курьерская";
    }
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $persons = $_POST['persons'];
    if($_POST['pay'] == 0){
        $pay = "Наличные";
    } elseif ($_POST['pay'] == 1){
        $pay = "Кредитная карта";
    }
    if(isset($_POST['desiredTime'])){
        $desiredTime = $_POST['desiredTime'];
    } else {
        $desiredTime = '-';
    }
    if(isset($_POST['money'])){
        $money = $_POST['money'];
    } else {
        $money = '-';
    }
    if(isset($_POST['address'])){
        $address = $_POST['address'];
    } else {
        $address = '-';
    }
    if(isset($_POST['comment'])){
        $comment = $_POST['comment'];
    } else {
        $comment = '-';
    }
    //echo $delivery.$name.$phone.$persons.$pay.$desiredTime.$money.$address.$comment;
    $sql = "INSERT INTO Orderer (delivery, name, telefon, person, money, date_time, `change`, adress, `comment`)
            VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s')";
    $query = sprintf($sql, mysqli_real_escape_string($connect, $delivery),
        mysqli_real_escape_string($connect, $name),
        mysqli_real_escape_string($connect, $phone),
        mysqli_real_escape_string($connect, $persons),
        mysqli_real_escape_string($connect, $pay),
        mysqli_real_escape_string($connect, $desiredTime),
        mysqli_real_escape_string($connect, $money),
        mysqli_real_escape_string($connect, $address),
        mysqli_real_escape_string($connect, $comment));

    $res = mysqli_query($connect, $query);
    $counter++;


    header('location: ../public/orderEnd.php?counter='.$counter);
}
