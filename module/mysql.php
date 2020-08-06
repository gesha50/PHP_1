

<?php
include 'config.php';

$sql = 'select * from images 
        order by counter desc';
$res = mysqli_query($connect, $sql);

?>