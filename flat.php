<?php
class flat {
    
    
    
    function __construct($db) {
       $this->db = $db;
    }

    function prepareOffer($idflat) {
        $result = $this->db->query("SELECT * FROM Supply inner join District on Supply.iddistrict = District.iddistrict inner join Users on Supply.iduser = Users.id WHERE Supply.id=$idflat");
        $i = 0;
        $result2 = $this->db->query("SELECT * FROM Offerimages  inner join Images on Offerimages.idimage = Images.id WHERE idoffer = $idflat");
        while ($row2 = $result2->fetch_row()) {
                $i++;
                $this->Src[$i] = $row2[3];
                }
        while ($row = $result->fetch_assoc()) {
            
                $this->area      = $row['area'];
                $this->price     = $row['price'];
                $this->metercost = $row['metercost'];
                $this->date      = $row['date'];
                $this->storey    = $row['storey'];
                $this->rooms     = $row['rooms'];
                $this->stage     = $row['stage'];
                $this->district  = $row['district'];
                $this->num       = $row['id'];
                $this->user      = $row['login'];
                $this->address   = $row['address'];
                }
            
     }
     
     function showOffer() {
            echo "<br><br><br>";
            echo "<div class='offer-block'>
                     <div class='inner-list' style='font-size:20px'>$this->rooms комнатная квартира $this->area кв.м <br>
                     <b>Ценa: $this->price рублей</b><br>
                     Цена за кв. метр: $this->metercost рублей<br>
                     $this->storey этаж<br>$this->district район <br>
                     Адрес: $this->address<br>
                     Стадия постройки: $this->stage<br>
                     Дата публикации: $this->date<br>
                     Автор публикации: $this->user<br>
               </div>";
     }
     
     function rollImageTape(){
          require 'rolltape.php';
     }

    
}
?>