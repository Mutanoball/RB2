<!DOCTYPE html>

<html lang="en">
<meta charset="utf-8" />
<head>
    
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <meta charset="utf-8" />    
    <script type="text/javascript">
        ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("map", {
                center: [55.76, 37.64],
                zoom: 7
            });
            }
    </script> 
    
</head>
<body>
<?php
    include '../config.php';
    include "Header.php";
    $idflat=$_GET['id'];
    function OfferFromBase($dbhost, $dbuser, $dbpassword, $dbname, $idflat)
    {
    $dbcon = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
    $limlow = ($currpage-1)*$showitems;
    $i=0;
    $result = $dbcon->query("SELECT * FROM Supply inner join District on Supply.iddistrict = District.iddistrict WHERE id=$idflat");
    while ($row = $result->fetch_assoc()) {
    $i++;
    $area=$row['area'];
    $price=$row['price'];
    $metercost=$row['metercost'];
    $date=$row['date'];
    $storey=$row['storey'];
    $rooms=$row['rooms'];
    $district=$row['district'];
    $num=$row['id'];
    echo "<br><br><br><br><br><br>";
    echo "<div class ='list2'><div class='bignum'>$num</div>";
    echo "<div class ='liist' style='font-size: 20pt' >$rooms комнатная квартира</a> $area кв.м <br>Ценa: $price рублей<br>Цена за кв. метр: $metercost рублей<br>$storey этаж<br>$district район <br>Дата публикации: $date<br></div>  <img width='250' height='250' src='01.jpg'><div id='map' style='width: 250px; height: 250px'></div></Div>\n";
    
    }
    }
    OfferFromBase($server, $username, $password, $db, $idflat);
?>
     
 
    </body>
