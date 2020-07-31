<?php
    function change($str){
        $str = explode(" ", $str);
        $str = implode("_", $str);
        echo $str;
    }
    function change2($str){
        // с этой функцией не много не разобрался 
        $str = str_replace(' ', '_', $str);
        echo $str;
    }
    change2("Какая прекрасная сегодня погода!")
?>
