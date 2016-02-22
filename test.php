<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<?php
session_name('ghdfghsdf');
session_start(); 
if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
$_SESSION['count'] = $_SESSION['count'] + 1; 
$t=session_id();

echo $t;?> 
<h2>Счетчик</h2> В текущей сессии работы с браузером Вы открыли эту страницу <?=$_SESSION['count']?> раз(а).<br> 
        Закройте браузер, чтобы обнулить счетчик.<br> <a href="<?=$_SERVER['SCRIPT_NAME']?>" target="_blank">Открыть дочернее окно  браузера</a>. 
        
    </body>
</html>
