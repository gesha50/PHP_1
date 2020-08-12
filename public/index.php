<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include '../modules/responsesToPage.php';
    $x = rand(1,10);
    $y = rand(1,10);
    $result = $x + $y; 
?>

    <div class="conteiner">
        
        <?php include '../template/header.php';?>
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
            <form action="modules/fResponses.php" method="post">
            <input type="hidden" name="correct" value="<?= $result?>">
                <p>Введите Ваше ФИО:</p>
                <input type="text" name="fio"> <br> 
                <p>Введите Ваш отзыв:</p>
                <textarea name="text" cols="30" rows="10"></textarea> <br>
                <p>Вычислите: <?= $x?> + <?= $y?> = <input style="width: 30px;" type="text" name="answer"></p> <br> 
                <input type="submit" name="Отправить" >        
        </form>
      </div>
    

    </div>
    
</body>
</html>