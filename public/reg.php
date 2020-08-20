
<?php include_once "../controllers/User.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Регистрация на сайте</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
<div class="conteiner">
    <header>
    <?php include "../template/header.php"; ?>
    </header>
    <div class="mainCart">
        <h1>Регистрация на сайте</h1>
        <hr>
        <?php if(isset($_SESSION['login']) && isset($_SESSION['pass'])):?>
            <h4>Вы уже вошли</h4>
        <?php else:?>
            <p><?= ($message)?$message:"";?></p>
            <form method="post">
                <p>Логин: <input type="text" name="login" maxlength="30" placeholder="Введите Логин" autofocus required></p>
                <p>Email: <input type="email" name="email" maxlength="30" placeholder="Введите Email" required></p>
                <p>Пароль: <input type="password" minlength="2" name="pass" placeholder="Введите Пароль" required></p>
                <input type="submit" name="submit" value="Зарегистрироваться" ">
            </form>
        <?php endif;?>
    </div>
    <footer>
        <?php include "../template/footer.php"; ?>
    </footer>
</div>
</body>
</html>
