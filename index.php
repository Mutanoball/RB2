<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>База первичной недвижимости Оренбурга</title>
        <script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
        <link rel="stylesheet" type="text/css" href="/Public/Main.css">
    </head>
    
    <body>        
        <hr class="nomar">
        <div class="pervaplashka"><br><b>База первичной недвижимости Оренбурга</b><br></div>
        <div class="menu">
<?php
    
$page = substr($_SERVER['REQUEST_URI'],1);

if ($page == "list") {
    echo '<p class="menu-item_state_active">Список предложений</p>';
} else {
    echo '<a href="/list" class="menu-item">Список предложений</a>';
}
if ($page == "search") {
    echo '<p class="menu-item_state_active">Поиск</p>';
} else {
    echo '<a href="/search" class="menu-item">Поиск</a>';
}
if ($page == "contacts") {
    echo '<p class="menu-item_state_active">Контакты</p>';
} else {
    echo '<a href="/contacts" class="menu-item">Контакты</a>';
}
if ($page == "auth") {
    echo '<p class="menu-item_state_active">Войти</p>';
} else {
    echo '<a href="/auth" class="menu-item">Войти</a>';
}
if ($page == "onmap") {
    echo '<p class="menu-item_state_active">На карте</p>';
} else {
    echo '<a href="/onmap" class="menu-item">На карте</a>';
}
echo '</div>';

switch ($page) {
    case "list";
    case "page1";
    case "page2";
    case "page3";
        require ("paginator.php");
        paginationFromBase($server, $username, $password, $db, "price", $pagi, 5);
        break;
    case "search":
        echo "Поиск же";
        break;
    case "contacts":
        echo "Обращайтесь в ад!";
        break;
    case "auth":
        require ("auth.php");
        break;
    case "onmap":
        echo "но не очко обычно губит, а к одиннадцати туз";
        break;
    default:
        require ('flat.php');
}


?>    
        