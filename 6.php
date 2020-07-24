<?php

function power($val, $pow,$val2=1){
    if($pow==0){
        echo 1;
        return $val;
    }
    if($pow == 1){
        echo $val2*=$val;
        return $val;
    }
    $val2 *= $val;
    power($val, $pow-1, $val2);
}
 power(5,3);
?>