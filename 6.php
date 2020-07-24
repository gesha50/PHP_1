<?php
// что то я сам алгоритм не понял...
// а как работает рекурсия вроде понятно
function power($val, $pow,$val2=0){
    $val2=$val;
    if($pow == 1){
        echo $val;
        return $val;
    }
    $val=$val*$val2;
    power($val, $pow-1, $val2);
}
 power(2,3);
 //echo pow(2,3);

?>