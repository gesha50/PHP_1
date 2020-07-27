<?php
 
$a = -1;
$b = -5;

if($a>=0 && $b >=0){
    // сделал дополнительную проверку 
    // чтоб из большего вычиталось меньшее =)
    if($a>$b){
        echo $a - $b;
    }
    elseif($b>$a){
        echo $b - $a;
    }
    else{
        echo 0;
    }
}
elseif($a<0 && $b<0){
    echo $a * $b;
}
else {
    echo $a + $b;
}

?>