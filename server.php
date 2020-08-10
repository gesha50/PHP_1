<?php
    

    //print_r($_POST);

    if($_POST['sign'] == '+'){
        $res = $_POST['number1'] + $_POST['number2'];
    } elseif ($_POST['sign'] == '-'){
        $res = $_POST['number1'] - $_POST['number2'];
    } elseif ($_POST['sign'] == '*'){
        $res = $_POST['number1'] * $_POST['number2'];
    } elseif ($_POST['sign'] == '/'){
        if($_POST['number2'] == 0){
            $res = 'Ошибка! На 0 делить нельзя!';
        } else {
            $res = $_POST['number1'] / $_POST['number2'];
        }
    }
    //print_r($res);
   //как сохранять данные не знаю


   
   if(isset($_POST['+'])) {
    $result = $_POST['num1'] + $_POST['num2'];
} elseif(isset($_POST['-'])) {
    $result = $_POST['num1'] - $_POST['num2'];
} elseif(isset($_POST['*'])) {
    $result = $_POST['num1'] * $_POST['num2'];
} elseif(isset($_POST['/'])) {
    if($_POST['num2'] == 0){
        $result = 'Ошибка! На 0 делить нельзя!';
    } else {
        $result = $_POST['num1'] / $_POST['num2'];
    }
}
?>
    




