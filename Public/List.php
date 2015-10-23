<?php
$Slist = array('объект1', 'объект2', 'объект3', 'объект4', 'объект5', 'объект6', 'объект7', 'объект8');
 $dat = date("d.m y");   
    for ($i = 0; $i < 10; $i++ )
    {
        echo $Slist[$i];
    }
?>

<!DOCTYPE html>



<html lang="en">
    <head>
        <meta charset="utf-8" />
      <title>Список предложений</title>
    </head><link rel="stylesheet" type="text/css" href="Main.css"/>
            </head>
    <body>

      <div class="pervaplashka"><br><b>База первичной недвижимости Оренбурга</b><br></div>
       
        
        
         <div class="menu" align ="center"><a href="List.html" class="boton">Список предложений</a><a href ="Search.html" class="boton">Поиск</a><a href ="Contacts.html" class="boton">Контакты</a><a href ="Search.html" class="boton">Войти</a><a class="boton">На карте</a></div>
        
        
       <br>
        <br> 
        <?php

    
        for ($i = 0; $i < 10; $i++ )
         {echo "<div class ='list2'><div class='bignum'>$i</div><div class ='liist'>$Slist[$i]<br>Ценa<br>что-то еще<br>Телефончик: 8 (495) 777-66-55<br></div>  <img width='100' height='100' src='01.jpg'></Div>\n";
                
    
        }
         
         ?>
            <div >2</div><div class ="liist">2-комнатная квартира 60 кв. м.<br>Ценa<br>что-то еще<br>Телефончик: 8 (495) 777-66-55<br></div>  <img width="100" height="100" src="01.jpg"></Div>
        </div>
         
         <div class ="list2">
            <div class="bignum">4</div><div class ="liist">2-комнатная квартира 60 кв. м.<br>Ценa<br>что-то еще<br>Телефончик: 8 (495) 777-66-55<br></div>  <img width="100" height="100" src="01.jpg"></Div>
        </div>
         <div class ="list2">
            <div class="bignum">5</div><div class ="liist">2-комнатная квартира 60 кв. м.<br>Ценa<br>что-то еще<br>Телефончик: 8 (495) 777-66-55<br></div>  <img width="100" height="100" src="01.jpg"></Div>
        </div>
         <div class ="list2">
            <div class="bignum">6</div><div class ="liist">2-комнатная квартира 60 кв. м.<br>Ценa<br>что-то еще<br>Телефончик: 8 (495) 777-66-55<br></div>  <img width="100" height="100" src="01.jpg"></Div>
        </div>
         <div class ="list2">
            <div class="bignum">7</div><div class ="liist">2-комнатная квартира 60 кв. м.<br>Ценa<br>что-то еще<br>Телефончик: 8 (495) 777-66-55<br></div>  <img width="100" height="100" src="01.jpg"></Div>
        </div>
         <div class ="list2">
            <div class="bignum">8</div><div class ="liist">2-комнатная квартира 60 кв. м.<br>Ценa<br>что-то еще<br>Телефончик: 8 (495) 777-66-55<br></div>  <img width="100" height="100" src="01.jpg"></Div>
        </div>
         <div class ="list2">
            <div class="bignum">9</div><div class ="liist">2-комнатная квартира 60 кв. м.<br>Ценa<br>что-то еще<br>Телефончик: 8 (495) 777-66-55<br></div>  <img width="100" height="100" src="01.jpg"></Div>
        </div>
         
          
         

                            
               
                           

                    <hr class= "nomar" size=0 color=#088 noshade style="clear:left;"> </hr>
        
        <div class="menu" style="margin-left: 40%; width: 300px"> <a href="1" class="boton ">1</a><a href="2" class="boton currentpage">2</a><a href="3" class="boton">3</a><a href="4" class="boton">4</a><a href="5" class="boton">5</a></div>


    <body>
        
</html>
