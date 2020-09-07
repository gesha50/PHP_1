<?php
session_start();
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
                <?php ?>
            </div>
            <footer>
                <?php include '../template/footer.php'; ?>
            </footer>
        <?php else:?>
            <h2>Вы не вошли в систему!</h2>
        <?php endif;?>
    </div>
</body>
</html>
