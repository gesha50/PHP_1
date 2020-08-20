<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    session_start();
include '../models/itemToPage.php';
?>
    <div class="conteiner">
    <?php include '../template/header.php';?>
<?php while($data = mysqli_fetch_assoc($res)): ?>
        <div class="main">
            <div class="img">
                <a href="<?= $data['urlB']?>" target="_blank">
                    <img width="500px" src="<?= $data['urlB']?>" alt="">
                </a>
            </div>
            <div class="text">
                <h2><?= $data['title']?></h2>
                <p><?= $data['descriptionB']?></p>
                <p>Цена: <?= $data['price']?></p>
                <a href="../models/addToCart.php?id=<?= $data['id']?>"><button class="button">Купить</button></a>
            </div>
        </div>
<?php endwhile; ?>
        <footer>
        <?php include '../template/footer.php';?>
        </footer>
    </div>


</body>
</html>