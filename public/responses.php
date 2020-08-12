<?php     include '../modules/responsesToPage.php';
$x = rand(1,10);
$y = rand(1,10);
$result = $x + $y;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
<div class="conteiner">
    <header>
        <?php include '../template/header.php';?>
    </header>
    <main>
        <div class="gridResponses">
            <?php while($data = mysqli_fetch_assoc($res)): ?>
                <div class="responses">
                    <h4 class='fio'><?= $data['fio']?></h4>
                    <p class='text'><?= $data['text']?></p>
                    <p class="date"><?= $data['date']?></p>
                </div>
            <?php endwhile; ?>
        </div>
        <hr>
        <div class="responsesForm">
            <?php
            if (isset($_GET['error'])):
                ?>
                <h3>Ошибка! Попробуйте ещё раз!</h3>
            <?php endif;?>
            <h4>Оставьте Ваш отзыв о нашем сайте</h4>
            <form action="../modules/fResponses.php" method="post">
                <input type="hidden" name="correct" value="<?= $result?>">
                <p>Введите Ваше ФИО:</p>
                <input type="text" name="fio"> <br>
                <p>Введите Ваш отзыв:</p>
                <textarea name="text" cols="30" rows="10"></textarea> <br>
                <p>Вычислите: <?= $x?> + <?= $y?> = <input style="width: 30px;" type="text" name="answer"></p> <br>
                <input type="submit" name="Отправить" >
            </form>

        </div>
    </main>
    <footer>
        <?php include '../template/footer.php'; ?>
    </footer>
</div>

</body>
</html>