<?php
    //print_r($_GET[name]);
    $foto = $_GET[name];
    $path = $_SERVER['DOCUMENT_ROOT'].'/minimalistica/big/'.$foto;
    //print_r($path);
    //fopen($path);
    Header("Content-type: image/jpeg");
    imagejpeg($path);


?>