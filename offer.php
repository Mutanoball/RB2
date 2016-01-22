<?php
require 'config.php';

$idflat = substr($_SERVER['REQUEST_URI'],1);
echo ($idflat);
function offerFromBase($dbhost, $dbuser, $dbpassword, $dbname, $idflat) 
{
    $dbcon = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
    $dbcon->set_charset("utf8");
    $limlow = ($currpage - 1) * $showitems;
    $i      = 0;
    $result = $dbcon->query("SELECT * FROM Supply inner join District on Supply.iddistrict = District.iddistrict inner join Users on Supply.iduser = Users.id WHERE Supply.id=$idflat");
    while ($row = $result->fetch_assoc()) {
        $i++;
        $area      = $row['area'];
        $price     = $row['price'];
        $metercost = $row['metercost'];
        $date      = $row['date'];
        $storey    = $row['storey'];
        $rooms     = $row['rooms'];
        $stage     = $row['stage'];
        $district  = $row['district'];
        $num       = $row['id'];
        $user      = $row['login'];
        $address   = $row['address'];
        echo "<br><br><br>";
        echo "<div class='offer-block'>
                     <div class='inner-list' style='font-size:20px'>$rooms комнатная квартира $area кв.м <br>
                     <b>Ценa: $price рублей</b><br>
                     Цена за кв. метр: $metercost рублей<br>
                     $storey этаж<br>$district район <br>
                     Адрес: $address<br>
                     Стадия постройки: $stage<br>
                     Дата публикации: $date<br>
                     Автор публикации: $user<br>
               </div>";
    }
    $i = 0;
    $result2 = $dbcon->query("SELECT * FROM Offerimages  inner join Images on Offerimages.idimage = Images.id WHERE idoffer = $idflat");
    while ($row2 = $result2->fetch_row()) {
        $i++;
        $Src[$i] = $row2[3];
    }
    ?>
          <img class=bigpic width=250 height=250 src=<?='Public/Src/'.$Src[1]?>>
          <div id=map style="width: 250px; height: 250px"></div>
          </div><p id='address' data-address='Оренбург, <?=$address?>'></p>
          <div class=pics-frame>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='Public/Src/'.$Src[1]?>>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='Public/Src/'.$Src[2]?>>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='Public/Src/'.$Src[3]?>>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='Public/Src/'.$Src[4]?>>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='Public/Src/'.$Src[5]?>>
          </div>
    <?php
}
offerFromBase($server, $username, $password, $db, $idflat);
?>
          
<script src='https://api-maps.yandex.ru/2.1/?lang=ru_RU'></script>
<script>
    var address = $('#address').data('address');
    ymaps.ready(init);
    var myMap,
        myGeocoder,
        myPlacemark;
    
    function init()
    {
        myGeocoder = ymaps.geocode(address).then(
        function (res)
            {
                myMap = new ymaps.Map("map", {
                    center: res.geoObjects.get(0).geometry.getCoordinates(),
                    zoom: 16
                    });
                myPlacemark = new ymaps.Placemark(res.geoObjects.get(0).geometry.getCoordinates(), {
                    hintContent: 'А вот она',
                    balloonContent: 'Хатка-то!'
                    });
                myMap.geoObjects.add(myPlacemark);
                          },
                function (err) { alert('Ошибка'); }
                    );

            }     
                           
    var getSmallPic = document.querySelector('.pics-frame');
    var getGigPic = document.querySelector('.bigpic');
    var changePic = function (elem) { getGigPic.src = elem.target.src };
    getSmallPic.addEventListener("click", changePic, false);           
</script>
     </body>
</html>
