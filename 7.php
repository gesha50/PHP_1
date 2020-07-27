<?php
 
 

 $hour=date('H')+3;
 if($hour==0 || ($hour>=5 && $hour<=20)){
    echo "$hour часов ";
 }elseif (($hour>=2 && $hour<=4) || $hour==22 || $hour==23) {
    echo "$hour часа ";
 }else{
    echo "$hour час ";
 }

$minute=date('i');
if($minute==1 || $minute==11 || $minute==21 || $minute==31 || $minute==41 || $minute==51){
    echo "$minute минута";
}
elseif (($minute>=2 && $minute<=4) || ($minute>=12 && $minute<=14) || ($minute>=22 && $minute<=24) || ($minute>=32 && $minute<=34) || ($minute>=42 && $minute<=44) || ($minute>=52 && $minute<=54)){
    echo "$minute минуты";
}
else{
    echo "$minute минут";
}
?>