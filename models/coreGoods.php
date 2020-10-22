<?php
include_once "db.php";
include_once "db_goods.php";

if($_POST['submit']){
    $name = trim(strip_tags($_POST['name']));
    print_r($name);
    $descriptionS = trim(strip_tags($_POST['descriptionS']));
    $descriptionB = trim(strip_tags($_POST['descriptionB']));
    $price = (int)trim(strip_tags($_POST['price']));

    require_once "image.php";
    //require_once "../config/config.php";

    $filePath  = $_FILES['img']['tmp_name'];
    $fileName  = translate($_FILES['img']['name']);
    $type = $_FILES['img']['type'];
    $size = $_FILES['img']['size'];
    define("DIR_BIG","img/big/");
    define("DIR_SMALL","img/small/");

    if($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif'){
        if($size>0 and $size<100000000){
            if(move_uploaded_file($filePath,"../public/img/big/".$fileName)){
                image_resize("../public/img/big/".$fileName, "../public/img/small/".$fileName, 250);
                if(isset($_POST['edit'])){
                    $id = (int)trim(strip_tags($_POST['edit']));
                    goods_edit($connect, $id, $name, $descriptionS,$descriptionB, DIR_BIG.$fileName, DIR_SMALL.$fileName, $price);
                    header("Location: ../admin/index.php");
                }else{
                    goods_new($connect, $name, $descriptionS,$descriptionB, DIR_BIG.$fileName, DIR_SMALL.$fileName, $price);
                    header("Location: ../admin/index.php");
                }

                $message = "<h3>Файл успешно загружен на сервер</h3>";
            }else{
                $message = "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
                exit;
            }
        }else{
            $message = "<b>Ошибка - картинка превышает 1 Мб.</b>";
        }
    }else{
        $message = "<b>Картинка не подходит по типу! Картинка должна быть в формате JPEG, PNG или GIF</b>";
    }
    print_r($message);
}
