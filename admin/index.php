<?php
include '../modules/goodsToPage.php';?>
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
        <div class="mainAdmin">
            <h1>Админка</h1>

            <?php while($data = mysqli_fetch_assoc($res)): ?>
                <div class="goodsItemAdmin">
                    <h3><?= $data['title']?></h3> <br>
                    <img src="../public/<?= $data['urlS']?>" alt="">
                    <a href="editGoods.php?id=<?=$data['id']?>"><button class="button buttonEdit">Редактировать</button></a>
                    <a href="deleteGoods.php?id=<?=$data['id']?>"><button class="button buttonDelete">Удалить</button></a>
                </div>
            <?php endwhile;?>
        </div>
        <footer>
            <?php include '../template/footer.php'; ?>
        </footer>
    </div>
</body>
</html>
