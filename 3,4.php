
<?php

function sum($a,$b){
    return $a + $b;
}
function mul($a,$b){
    return $a * $b;
}
function sub($a,$b){
    return $a - $b;
}
function div($a,$b){
    if($b==0){
        return "на 0 делить нельзя!";
    }
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case "summation" || "+":
            $b = sum($arg1, $arg2);
            echo $b;
        break;
        case "multiplication" || "*":
            echo mul($arg1, $arg2);
        break;
        case "subtraction" || "-":
            echo sub($arg1, $arg2);
        break;
        case "division" || "/":
            echo div($arg1, $arg2);
        break;
        default:
            echo "ошибка";
    }
}
mathOperation(6,2,"+");

?>
