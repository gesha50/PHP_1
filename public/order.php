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
        <?php include "../template/header.php"; ?>
    </header>
    <main>
<!--        <div class="main"></div>-->
<!--        <script>-->
<!--            window.onload = function(){-->
<!--                 renderCart();-->
<!---->
<!--            }-->
<!---->
<!--        </script>-->
        <h2>Заполните данные:</h2>
        <div class="formClientInfo">
            <form class="formOrder" id="formOrder" action="../controllers/order.php" method="post">
                <label for="typeSend">Выберите тип доставки:</label><br><br>
                <input type="radio" name="typeSend" value="1"><span>Курьерская</span>
                <input type="radio" name="typeSend" value="0" checked><span>Самовывоз</span><br>
                <label for="inputName" class="">Имя</label><br>
                <input type="text" name="name" id="inputName" placeholder="Введите имя"><br>
                <label for="inputPhone" class="">Телефон</label><br>
                <div class="inputGroup"><input type="text" name="phone" class="rowGoods nameFull" placeholder="Введите номер телефона"></div><br>
                <label for="inputPersons" class="">Количество персон</label><br>
                <input type="text" name="persons" id="inputPersons" placeholder="Введите Количество персон"><br>
                <label for="inputtypepay" class="">Способ оплаты</label><br>
                <select class="form-control input-sm" name="pay" id="inputtypepay"><br>
                    <option value="0">Наличные</option>
                    <option value="1">Кредитная карта</option>
                </select><br><br>
                <label for="inputTime" class="">Заказ на время</label><br>
                <input type="text" name="desiredTime" id="inputTime" placeholder="Введите желаемое время исполнения заказа"><br>
                <label for="inputMoney" class="">Сдача</label><br>
                <input type="text" name="money" id="inputMoney" placeholder="С какой купюры приготовить сдачу"><br>
                <label for="inputAddress" class="">Адрес</label><br>
                <textarea type="text" name="address" id="inputAddress" placeholder="Адрес доставки"></textarea><br>
                <label for="inputComment" class="">Комментарий</label><br>
                <textarea type="text" name="comment" id="inputComment" placeholder="Комментарий к заказу"></textarea><br>
                <input type="hidden"  name="totalCoast" value="123456!">
                <input type="submit" name="order" class="btn btn-primary" value="Заказать!">
            </form>
        </div>
    </main>
    <footer>
        <?php include "../template/footer.php"; ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>
