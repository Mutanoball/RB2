<?php
    
    $pagi=$_GET['pagi'];
    if (empty($pagi)) $pagi=1;
    function PaginationFromBase($dbhost, $dbuser, $db, $ordercriteria, $currpage, $showitems)
    {
    mysql_connect($dbhost, $dbuser);
    mysql_select_db($db);
    $limlow = ($currpage-1)*$showitems;
    $i=0;
    $result = mysql_query("SELECT * FROM Supply order by $ordercriteria LIMIT $limlow, $showitems");
    while ($row = mysql_fetch_assoc($result)) {
    $i++;
    $area=$row['area'];
    $price=$row['price'];
    $storey=$row['storey'];
    $rooms=$row['rooms'];
    $num=$i+$limlow;
    echo "<div class ='list2'><div class='bignum'>$num</div>";
    echo "<div class ='liist'>$rooms комнатная кваритра $area кв.м <br>Ценa: $price рублей<br>$storey этаж<br>Телефончик: 66768548 <br></div>  <img width='100' height='100' src='01.jpg'></Div>\n";
    
    }
    ?>
      <hr class= "nomar" size=0 color=#088 style="clear:left;"> </hr>
        <div class="menu" style="margin-left: 40%; width: 300px">
         <?php
        
    for ($i=1; $i<4; $i++){
    if ($i!=$currpage){
        $iu[$i]="menu-item";
    } else { $iu[$i]="menu-item_state_active";}?>
     <a href="?pagi=<?=$i?>" class=<?=$iu[$i]?>><?=$i?></a>
    <?php }
 }
?>
    <?php
        $lim=5;
    PaginationFromBase("localhost", "root", "RB2", "price", $pagi, 5);
    ?>

