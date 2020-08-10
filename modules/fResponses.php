<?php
    include 'sqlConnect.php';
if ($_POST['answer'] == $_POST['correct']){
    $fio = (!(!$_POST['fio']) ? strip_tags($_POST['fio']) : "");
    $response = $_POST['text'];

    $sql = "insert into responses(fio,text) values('$fio','$response')";
    $res = mysqli_query($connect, $sql);

    header('location: ../index.php');
} else {
    header('location: ../index.php?error=true');
}
?>
    




