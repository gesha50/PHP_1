<?php
$menuName = [
    "Главная" => ["О нас", "Производство", "Качество"],
    "Архив" => ["Основное", "Документы"],
    "Контакты" => ["Адрес", "Телефон", "Написать нам"]
];
$listMenu = '<ul id="menu">';
foreach ($menuName as $menuKey => $menuList){
    $listMenu .= '<li><a href="#">'.$menuKey.'</a>';
    if(is_array($menuName[$menuKey])){
        $listMenu .= '<ul id="menuMenu">';
        for($i=0;$i<count($menuName[$menuKey]);$i++){
            $listMenu .= '<li><a href="#">'.$menuList[$i].'</a></li>';
        }
        $listMenu .= '</ul>';
    }
    $listMenu .= '</li>';
}

$listMenu .= "</ul>";
echo $listMenu;
?>