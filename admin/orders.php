<?php
session_start();
include '../models/goodsToOrders.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="conteiner">
        <?php if(isset($_SESSION['login']) && isset($_SESSION['pass']) && $_SESSION['login'] == 'admin'): ?>
            <header>
                <?php include '../template/headerAdmin.php';?>
            </header>
            <div class="mainAdmin">

                <table border='1' class='tableOrder'>
                <tr>
                    <th>№ Заказа</th><th><p>О товаре</p></th><th>Способ доставки</th><th>Имя покупателя</th><th>Номер тел.</th>
                    <th>Кол-во персон</th><th>Способ оплаты</th><th>К какому времени</th><th>Купюра оплаты</th>
                    <th>Адрес</th><th>Комментарий</th><th>Время заказа</th><th>Статус</th>
                </tr>
                <?php while($data = mysqli_fetch_assoc($res)):  ?>

                    <tr>
                    <td><?=$data['id']; ?></td><td><a href='#' onclick="aboutOrder(<?= $data['id']; ?>)">подробнее</a></td><td><?= $data['delivery']; ?></td>
                        <td><?= $data['name']; ?></td><td><?= $data['telefon']; ?></td>
                    <td><?= $data['person']; ?></td><td><?= $data['money']; ?></td><td><?= $data['date_time']; ?></td><td><?= $data['change']; ?></td>
                    <td><?= $data['adress']; ?></td><td><?= $data['comment']; ?></td><td><?= $data['time_order']; ?></td><td><?= $data['status']; ?></td>
                </tr>

                <?php endwhile; ?>
                </table>
                <div id="modalWindow">hhhh</div>
            </div>
            <footer>
                <?php include '../template/footer.php'; ?>
            </footer>
        <?php else:?>
            <h2>Вы не вошли в систему!</h2>
        <?php endif;?>
    </div>
    <script src="../public/js/jquery-3.5.1.js"></script>
    <script src="../public/js/ajax.js"></script>
</body>
</html>
