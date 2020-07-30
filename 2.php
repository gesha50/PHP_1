<?php
$i = 0;
do{
if($i == 0){
    echo $i." - ноль <br>";
}
elseif($i%2==1){
    echo $i." - нечётное число <br>";
}else {
    echo $i." - чётное число <br>";
}
$i++;

}while($i<=10)

?>


