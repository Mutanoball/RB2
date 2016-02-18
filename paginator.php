<?php
class paginator {
    
    
    
    function __construct($db) {
       $this->db = $db;
    }
    
        
    
    function printSearchOffers($ordercriteria, $showitems, $limlow) {
        $result = $this->db->query("SELECT * FROM Supply inner join District on Supply.iddistrict = District.iddistrict order by $ordercriteria LIMIT $limlow, $showitems");
        $i = 0;
        while ($row = $result->fetch_assoc()) {
        $i++;
        $id       = $row['id'];
        $area     = $row['area'];
        $price    = $row['price'];
        $storey   = $row['storey'];
        $rooms    = $row['rooms'];
        $district = $row['district'];
        $num      = $i + $limlow;
        $result2 = $this->db->query("SELECT * FROM Offerimages  inner join Images on Offerimages.idimage = Images.id WHERE idoffer = $num");
        while ($row2 = $result2->fetch_row()) {       
            $Src = '/Public/Src/' . $row2[3];
            }
        
        echo "<div class ='list-block'>
              <div class='bignum'>$num</div>
              <div class ='inner-list'><a href='/offer/$id'>$rooms комнатная квартира</a> $area кв.м <br>
              Ценa: $price рублей<br>
              $storey этаж<br>
              $district район <br>
              </div>
              <img width='100' height='100' src=$Src>
              </div>\n";
        }
     
    }
    
    
    function pageNumber ($currpage){
        echo   "<hr class='nomar' size=0>
                <div class='menu' style='margin-left: 40%; width: 300px'>";
        
        for ($i = 1; $i < 4; $i++) {
            if ($i != $currpage) {
                $iu[$i] = "menu-item";
            }   
                else {
                $iu[$i] = "menu-item_state_active";
                }
            echo "<a href='/list/" . $i ."' class='" . $iu[$i]."'>" . $i ."</a>";
        }
    }
}
     


?>