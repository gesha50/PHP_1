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
        <?php if($row_cnt !== 0):?>
        <?php while($data = mysqli_fetch_assoc($res)): ?>
            <div class="goodsItem">
                <a  href="item.php?id=<?= $data['id_good']?>"><img class="imgMini" src="<?= $data['urlB']?>" alt=""></a>
                <div class="itemText">
                    <h3><?= $data['title']?></h3> <br>
                    <p>Цена: <?= $data['price']?></p> <br>
                </div>
                <div class="counterDiv">
                    <a class="counterCart decrement_<?= $data['cart_id']?>" onclick="decrement(<?= $data['cart_id']?>,<?= $data['counter']?>)">-</a>
                    <input id="counterValue_<?= $data['cart_id']?>" class="counterCart" value="<?= $data['counter']?>">
                    <a class="counterCart increment_<?= $data['cart_id']?>" onclick="increment(<?= $data['cart_id']?>)">+</a>
                </div>
                <span class="price">цена: <?= $data['price']*$data['counter']?></span>
                <a onclick="decrement(<?= $data['cart_id']?>,1)" class="delete">Удалить</a>

            </div>
        <?php $ok += $data['price']*$data['counter']?>
        <?php endwhile;?>

            <span class="totalPrice">Итого: <?= $ok?></span>
            <a href="order.php"><button class="button allBuy">Оформить заказ</button></a>

        <?php else: ?>
            <h4>Корзина пуста =(</h4>
        <?php endif; ?>

    </div>
    <footer>
        <?php include '../template/footer.php';?>
    </footer>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>
