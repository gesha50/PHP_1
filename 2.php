

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $foto = scandir("small");
    
    for($i=2;$i<count($foto);$i++):
        ?>
            
        <span><a target="blank" href="server.php?name=<?= $foto[$i]?>"><img src="small/<?= $foto[$i]?>" alt=""></a></span>
        

    <?php endfor?>
    
</body>
</html>