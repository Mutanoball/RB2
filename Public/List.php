<html>  
    <head>
        <meta charset="utf-8"/>
        <title>База первичной недвижимости Оренбурга</title>
        <link rel="stylesheet" type="text/css" href="Main.css"/>
    </head>
    <body>
<?php

    $page=1;
    include "Header.php";
    $user="root";
    $Base="RB2";
    $i=0;
    mysql_connect("localhost", $user);
    mysql_select_db($Base);
    $result = mysql_query("SELECT * FROM Supply order by date desc");
    while ($row = mysql_fetch_assoc($result)) {
    $i++;
    $area=$row['area'];
    $price=$row['price'];
    $storey=$row['storey'];
    $rooms=$row['rooms'];
    $date=$row['date'];
    echo "<div class ='list2'><div class='bignum'>$i</div>";
    echo "<div class ='liist'>$rooms комнатная квартира $area кв.м <br>Ценa: $price рублей<br>$storey этаж<br>Добавлено: $date<br></div>  <img width='100' height='100' src='01.jpg'></Div>\n";
    
    }
    ?>
        <hr class= "nomar" size=0 color=#088 style="clear:left;"> </hr>
        <div class="menu" style="margin-left: 40%; width: 300px"> <a href="1" class="menu-item">1</a><a href="2" class="menu-item">2</a><a href="3" class="menu-item">3</a><a href="4" class="menu-item">4</a><a href="5" class="menu-item">5</a></div>
    </body>
        
</html>
