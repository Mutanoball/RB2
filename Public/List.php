<?php
$page=1;
$komnost = array ('1-комнатная квартира', '2-комнатная квартира', '3-комнатная квартира', '4-комнатная квартира');
$price = array ();
$telnum = array ();
$telprefix = array ('922','912','903');
$Slist = array('объект1', 'объект2', 'объект3', 'объект4', 'объект5', 'объект6', 'объект7', 'объект8');

for ($i = 0; $i<16; $i++)
{$price [$i] = mt_rand (1400,3500)*1000;}

for ($i = 0; $i<16; $i++)
{$sqarea [$i] = mt_rand (56,90);}

for ($i = 0; $i<16; $i++)
{$telnum [$i] = "+7"." ".$telprefix [mt_rand (0,2)]."-".mt_rand(200,900)."-".mt_rand(10,99)."-".mt_rand(10,99);}
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Список предложений</title>
        <link rel="stylesheet" type="text/css" href="Main.css"/>
    </head>
    
    <body>
<?php 
include "Header.php";
for ($i = 1; $i < 16; $i++ ){
$z1=mt_rand(0,3);
$z2=mt_rand(0,7);
echo "<div class ='list2'><div class='bignum'>$i</div><div class ='liist'>$komnost[$z1] $sqarea[$i] кв.м <br>Ценa: $price[$i] рублей<br>$Slist[$z2]<br>Телефончик: $telnum[$i]<br></div>  <img width='100' height='100' src='01.jpg'></Div>\n";
}
?>
        <hr class= "nomar" size=0 color=#088 style="clear:left;"> </hr>
        <div class="menu" style="margin-left: 40%; width: 300px"> <a href="1" class="boton ">1</a><a href="2" class="boton currentpage">2</a><a href="3" class="boton">3</a><a href="4" class="boton">4</a><a href="5" class="boton">5</a></div>
    </body>
        
</html>
