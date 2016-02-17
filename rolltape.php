<!DOCTYPE html>
<html>
    <head></head>
    <body>

          <img class=bigpic width=250 height=250 src=<?='/Public/Src/'.$this->Src[1]?>>
          <div id=map style="width: 250px; height: 250px"></div>
          </div><p id='address' data-address='Оренбург, <?=$this->address?>'></p>
          <div class=pics-frame>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='/Public/Src/'.$this->Src[1]?>>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='/Public/Src/'.$this->Src[2]?>>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='/Public/Src/'.$this->Src[3]?>>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='/Public/Src/'.$this->Src[4]?>>
               <img style="border: 20px double #eee;" width=125 height=130 src=<?='/Public/Src/'.$this->Src[5]?>>
          </div>
    


          
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

