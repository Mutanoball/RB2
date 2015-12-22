<!DOCTYPE html>
<html lang=en>
     <meta charset=utf-8 />
     <head>

          <script src='https://api-maps.yandex.ru/2.1/?lang=ru_RU'></script>
          <meta charset=utf-8 />
      

     </head>
     <body>

          <?php
               include '../config.php';
               include "Header.php";
               $idflat=$_GET['id'];
               function OfferFromBase($dbhost, $dbuser, $dbpassword, $dbname, $idflat)
               {
               $dbcon = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
               $dbcon->set_charset("utf8");
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
               $stage=$row['stage'];
               $district=$row['district'];
               $num=$row['id'];
               $address=$row['address'];
               echo "<br><br><br>";
               
               echo "<div class='offer-block'>
                     <div class='inner-list' style='font-size:20px'>$rooms комнатная квартира<br>$area кв.м <br>Ценa: $price рублей<br>Цена за кв. метр: $metercost рублей<br>$storey этаж<br>$district район <br>Адрес: $address<br>Стадия постройки: $stage<br>Дата публикации: $date<br></div>";
          ?>
          <img class=bigpic width=250 height=250 src=01.jpg>
          <div id=map style="width: 250px; height: 250px"></div>
          
          </div><p id='address' data-address='Оренбург, <?=$address?>'></p>
          <?php
               }
               }
               OfferFromBase($server, $username, $password, $db, $idflat);
          ?>


          <div class=pics-frame>
               <img style="border: 20px double #eee;" width=125 height=130 src=01.jpg>
               <img style="border: 20px double #eee;" width=125 height=130 src=02.jpg>
               <img style="border: 20px double #eee;" width=125 height=130 src=03.jpg>
               <img style="border: 20px double #eee;" width=125 height=130 src=04.jpg>
               <img style="border: 20px double #eee;" width=125 height=130 src=05.jpg>
          </div>
          
          
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
                               debugger;
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
