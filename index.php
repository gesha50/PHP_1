<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style='display: grid;grid-template-columns: 1fr 1fr 1fr'>
<?php
include 'config.php';
include 'module/mysql.php';

 while($data = mysqli_fetch_assoc($res)):?>

<div>
	<p><?= $data['name']?></p>
	<a href="server.php?photo=<?= $data['url'].$data['type']?>&id=<?= $data['id']?>&name=<?= $data['name']?>" target='blank'>
		<img width='150px' src="<?= $data['url'].$data['type']?>" alt=""> 
	</a>

	</div>

<?php endwhile?>
</body>
</html>
