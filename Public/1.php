<?php
echo getenv("CLEARDB_DATABASE_URL");
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"]; echo $server;
$username = $url["user"]; echo $username;
$password = $url["pass"]; echo $password;
$db = substr($url["path"], 1); echo $db;
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
