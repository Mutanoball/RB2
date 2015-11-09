<?php  
 
   if (!empty(getenv('CLEARDB_DATABASE_URL'))) {
       include_once('config.prod.php');
   } else {
       include_once('config.dev.php');
   }

?>