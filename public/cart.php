<?php     session_start();
include '../models/goodsToCart.php';
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="conteiner">
    <header>
    </header>
    <?php include '../template/header.php';?>
    </header>
    <div class="mainCart">
        <?php while($data = mysqli_fetch_assoc($res)): ?>
            <div class="goodsItem">
                <a  href="item.php?id=<?= $data['id_good']?>"><img class="imgMini" src="<?= $data['urlB']?>" alt=""></a>
                <div class="itemText">
                    <h3><?= $data['title']?></h3> <br>
                    <p><?= $data['price']?></p> <br>
                </div>
                <div class="counterDiv">
                    <a class="counterCart" href="../models/decrement.php?id=<?= $data['cart_id']?>&counter=<?= $data['counter']?>">-</a>
                    <p class="counterCart"><?= $data['counter']?></p>
                    <a class="counterCart" href="../models/increment.php?id=<?= $data['cart_id']?>">+</a>
                </div>
                <span class="price">цена: <?= $data['price']*$data['counter']?></span>
                <a href="../models/decrement.php?id=<?= $data['cart_id']?>&counter=1" class="delete">Удалить</a>

            </div>
        <?php $ok += $data['price']*$data['counter']?>
        <?php endwhile;?>
        <?php if($row_cnt !== 0):?>
            <span class="totalPrice">Итого: <?= $ok?></span>
            <button class="button allBuy">Оформить заказ</button>

        <?php endif; ?>

    </div>
    <footer>
        <?php include '../template/footer.php';?>
    </footer>

</div>

</body>
</html>
