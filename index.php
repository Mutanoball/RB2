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
ini_set('display_errors', 1);
set_include_path('/app/');
echo __FILE__;
error_reporting(E_ALL);
    
require_once "config.php";
spl_autoload_register(function ($class) {
    include './'. $class . '.php';
});

$dbparams = array ("host" => $server,
                   "user" => $username,
                   "password" => $password,
                   "database" => $db);
$app1 = new App($dbparams);
$page = substr($_SERVER['REQUEST_URI'],1);

if (strpos($page, "list") === 0 or strpos($page, "offer") === 0) {
    $pageNum = substr($page, -1);
    if (strpos($page, "list") === 0) $page = 'list';
    if (strpos($page, "offer") === 0) $page = 'offer';
    if ($pageNum == "t") $pageNum = 1;
    echo '<p class="menu-item_state_active">Список предложений</p>';
} else {
    echo '<a href="/list/1" class="menu-item">Список предложений</a>';
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
    case "";
        break;
    case "list";
        $at = new Praginator ($app1->GetDB());
        $at->printSearchOffers('price', 5, ($pageNum-1)*5);
        $at->pageNumber($pageNum);
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
    case "offer":
        $at = new Flat ($app1->GetDB());
        $at->prepareOffer($pageNum);
        $at->showOffer();
        $at->rollImageTape();
        break;
    default:
        echo '<p style="font-size: 40pt"> ЧЕТЫРЕСТА ЧЕТЫРЕ!!!<p>';
}


?>    
        