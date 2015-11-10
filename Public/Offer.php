<meta charset="utf-8" />
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
    echo "<div class ='liist' style='font-size: 20pt' ><a href='Offer.php?id=$num'> $rooms комнатная квартира</a> $area кв.м <br>Ценa: $price рублей<br>Цена за кв. метр: $metercost рублей<br>$storey этаж<br>$district район <br>Дата публикации: $date<br></div>  <img width='250' height='250' src='01.jpg'></Div>\n";
    
    }
    }
    OfferFromBase($server, $username, $password, $db, $idflat);
?>


