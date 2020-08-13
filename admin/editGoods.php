<?php include '../modules/itemToPage.php';
if($_GET['id']){
    $id= (int)($_GET['id']);
    $good = mysqli_fetch_assoc($res);
}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="conteiner">
        <header>
            <?php include '../template/headerAdmin.php';?>
        </header>
        <div class="content">
            <form method="post" action="../modules/coreGoods.php" enctype="multipart/form-data">
                <p><strong>Добавить товар:</strong></p>
                <p>наименование: <br><input type="text" name="name" maxlength="100" value="<?=$good['title']?>"></p>
                <p>Краткое описание: <br><textarea name="descriptionS" rows="5"><?=$good['descriptionS']?></textarea></p>
                <p>Подробное описание: <br><textarea name="descriptionB" rows="10"><?=$good['descriptionB']?></textarea></p>
                <p>цена: <br><input type="number" name="price" maxlength="20" value="<?=$good['price']?>" ></p>
                <p><strong>Загрузите картинку в формате JPEG, PNG или GIF</strong></p>
                <p><img src="../public/<?=$good['urlS']?>" width="200"></p>
                <p><input type="file" name="img" accept="image/jpeg,image/png,image/gif"></p>
                <input type="hidden" name="src" value="<?=$good['urlB']?>">
                <input type="hidden" name="edit" value="<?=$good['id']?>">
                <p><input type="submit" name="submit"></p>
            </form>
        </div>
        <footer>
            <?php include '../template/footer.php';?>
        </footer>
    </div>
</body>
</html>
