<?php include_once "../controllers/User.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Вход на сайт</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <header>
    <?php include "../template/header.php"; ?>
    </header>
    <div class="content">
        <?php if(isset($_SESSION['login']) && isset($_SESSION['pass'])):?>
            <p>Приветствую вас <?=$_SESSION['login']?></p>
        <?php else:?>
            <h1>Вход на сайт</h1><hr>
            <?php echo $message?$message:"";?>
            <form method="post">
                <p>Логин: <input type="text" name="login" maxlength="30" placeholder="Введите Логин" autofocus required></p>
                <p>Пароль: <input type="password" minlength="2" name="pass" placeholder="Введите Пароль" required></p>
                <input type="submit" name="enter" value="Войти" ">
            </form>
        <?php endif;?>
    </div>
    <footer>
        <?php include "../template/footer.php"; ?>
    </footer>
</div>
</body>
</html>
