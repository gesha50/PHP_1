<?php
    function change($str){
        $str = explode(" ", $str);
        $str = implode("_", $str);
        echo $str;
    }
    function change2($str){
        // с этой функцией не много не разобрался 
        $str = preg_replace(' ', '_', $str);
        echo $str;
    }
    change("Какая прекрасная сегодня погода!")
?>
