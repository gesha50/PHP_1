<?php
include '';?>
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
    <?php if(isset($_SESSION['login']) && isset($_SESSION['pass']) && $_SESSION['login'] == 'admin'): ?>
    <header>
        <?php include '../template/headerAdmin.php';?>
    </header>
    <div class="mainAdmin">
        <div class="content">
            <form method="post" action="../models/coreGoods.php" enctype="multipart/form-data">
                <p><strong>Добавить товар:</strong></p>
                <p>Введите наименование: <br><input type="text" name="name" maxlength="100" required></p>
                <p>Введите описание: <br><textarea name="descriptionS" rows="5" required></textarea></p>
                <p>Введите описание: <br><textarea name="descriptionB" rows="10" required></textarea></p>
                <p>Введите цену: <br><input type="number" name="price" maxlength="20" required></p>
                <p><strong>Загрузите картинку в формате JPEG, PNG или GIF</strong></p>
                <p><input type="file" name="img" accept="image/jpeg,image/png,image/gif" required></p>
                <p><input type="submit" name="submit"></p>
            </form>
        </div>
    </div>
    <footer>
        <?php include '../template/footer.php';?>
    </footer>
    <?php else:?>
        <h2>Вы не вошли в систему!</h2>
    <?php endif;?>
</div>
</body>
</html>
