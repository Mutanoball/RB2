<?php
    
    $pagi=$_GET['pagi'];
    if (empty($pagi)) $pagi=1;
    function PaginationFromBase($dbhost, $dbuser, $dbpassword, $dbname, $ordercriteria, $currpage, $showitems)
    {
    $dbcon = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
    $limlow = ($currpage-1)*$showitems;
    $i=0;
    $result = $dbcon->query("SELECT * FROM Supply inner join District on Supply.iddistrict = District.iddistrict order by $ordercriteria LIMIT $limlow, $showitems");
    while ($row = $result->fetch_assoc()) {
    $i++;
    $area=$row['area'];
    $price=$row['price'];
    $storey=$row['storey'];
    $rooms=$row['rooms'];
    $district=$row['district'];
    $num=$i+$limlow;
    echo "<div class ='list2'><div class='bignum'>$num</div>";
    echo "<div class ='liist'>$rooms комнатная кваритра $area кв.м <br>Ценa: $price рублей<br>$storey этаж<br>$district район <br></div>  <img width='100' height='100' src='01.jpg'></Div>\n";
    
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
    PaginationFromBase($server, $username, $password, $db, "price", $pagi, 5);
    ?>

