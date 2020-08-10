<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'modules/goodsToPage.php';
?>

    <div class="content">

        <div class="header">

        </div>

        <div class="main">
            <?php while($data = mysqli_fetch_assoc($res)): ?>
                <? print_r($data);?>
                <div class="goodsItem">
                    <a  href="item.php?id=<?= $data['id']?>"><img src="<?= $data['urlS']?>" alt=""></a>
                    <div class="itemText">
                        <h3><?= $data['title']?></h3> <br>
                        <p><?= $data['descriptionS']?></p> <br>
                        <p><?= $data['price']?></p> <br>
                    </div>
                    <button class="buttonBuy">Купить</button>
                </div>
            <?php endwhile;?>
        </div>
        <div class="footer">

        </div>


    </div>

</body>
</html>