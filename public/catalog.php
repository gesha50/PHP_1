<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
    <?php     session_start();
    include '../models/goodsToPage.php';
?>

    <div class="conteiner">

    <?php include '../template/header.php'; ?>

        <div class="main">
            <?php while($data = mysqli_fetch_assoc($res)): ?>
                <div class="goodsItem">
                    <a  href="item.php?id=<?= $data['id']?>"><img class="imgMini" src="<?= $data['urlB']?>" alt=""></a>
                    <div class="itemText">
                        <h3><?= $data['title']?></h3> <br>
                        <p><?= $data['descriptionS']?></p> <br>
                        <p><?= $data['price']?></p> <br>
                    </div>
                    <a onclick="buy(<?= $data['id']?>)"><button class="buttonBuy">Купить</button></a>
                </div>
            <?php endwhile;?>
        </div>
        <footer>
            <?php include '../template/footer.php'; ?>
        </footer>


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>