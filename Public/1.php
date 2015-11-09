<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"]; echo "сервер".$server;
$username = $url["user"]; echo "юзверь".$username;
$password = $url["pass"]; echo "Пароль".$password;
$db = substr($url["path"], 1); echo "бдешка".$db;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
