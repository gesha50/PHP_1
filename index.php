<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'server.php';
?>
    <div style="margin: 200px auto;
    text-align: center;">
    
    <form action="#?name1=" method="POST">
        <input  style="width: 25px" type="text"name="number1" value="">

        <select name="sign">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input style="width: 25px" type="text"name="number2">

        <input type="submit" value="=">
        <span><?= $res?></span>

    
    
    </form>
    
    </div>
</body>
</html>