<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'server.php'
    
?>
<div style="margin: 200px auto;
    text-align: center;">
    
    <form action="#" method="POST">
        <input style="width: 25px" type="text"name="num1">

        <input style="width: 25px" type="text"name="num2">

        <span><?= $result?></span> <br> <br>

        <input type="submit" name="+" value="+">
        <input type="submit" name="-" value="-">
        <input type="submit" name="*" value="*">
        <input type="submit" name="/" value="/">



    
    
    </form>
    
    </div>
</body>
</html>
