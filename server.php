<?php
    include 'config.php';

    $name = $_GET['name'];
    $id = $_GET['id'];

    $sql = ("update images set counter=counter+1 where id = $id");
    $sql2 = ("select counter from images 
            where id = $id");

    $res = mysqli_query($connect, $sql);
    $res2 = mysqli_query($connect, $sql2);

    $data = mysqli_fetch_assoc($res2);
    

    $foto = $_GET['photo'];
    $toImg = '?photo='.$foto;
    $path = '1.php'.$toImg.'&counter='.$data['counter'];
    
    Header("location: ".$path);
?>
    




