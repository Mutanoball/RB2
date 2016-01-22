<?php
require 'config.php';
$pagi = $_GET['pagi'];
if (empty($pagi)) {
    $pagi = 1;
}

function paginationFromBase($dbhost, $dbuser, $dbpassword, $dbname, $ordercriteria, $currpage, $showitems) 
{
    $dbcon = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
    $dbcon->set_charset("utf8");
    $limlow = ($currpage - 1) * $showitems;
    $i      = 0;
    $result = $dbcon->query("SELECT * FROM Supply inner join District on Supply.iddistrict = District.iddistrict order by $ordercriteria LIMIT $limlow, $showitems");
    echo "<br><br>";
    while ($row = $result->fetch_assoc()) {
        $i++;
        $id       = $row['id'];
        $area     = $row['area'];
        $price    = $row['price'];
        $storey   = $row['storey'];
        $rooms    = $row['rooms'];
        $district = $row['district'];
        $num      = $i + $limlow;
        
        $result2 = $dbcon->query("SELECT * FROM Offerimages  inner join Images on Offerimages.idimage = Images.id WHERE idoffer = $num");
        while ($row2 = $result2->fetch_row()) {       
            $Src = 'Src/' . $row2[3];
        }
        
        echo "<div class ='list-block'>
              <div class='bignum'>$num</div>
              <div class ='inner-list'><a href='$id'>$rooms комнатная квартира</a> $area кв.м <br>
              Ценa: $price рублей<br>
              $storey этаж<br>
              $district район <br>
              </div>
              <img width='100' height='100' src=Public/$Src>
              </div>\n";
    }
    ?>
      <hr class="nomar" size=0>
      <div class="menu" style="margin-left: 40%; width: 300px">
    <?php
    
    for ($i = 1; $i < 4; $i++) {
        if ($i != $currpage) {
            $iu[$i] = "menu-item";
        } else {
            $iu[$i] = "menu-item_state_active";
        }
        ?>
        <a href="?pagi=<?= $i ?>" class=<?= $iu[$i] ?>><?= $i ?></a>
    <?php
    }
}
?>
    <?php
$lim = 5;

?>

