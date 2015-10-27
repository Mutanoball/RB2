        
        <link rel="stylesheet" type="text/css" href="Main.css"/>
       
        <hr class= "nomar" size=30 color=#088></hr>
        <div class="pervaplashka"><br><b>База первичной недвижимости Оренбурга</b><br></div>
        <div class="menu" align ="center">
        
    <?php    
        if ($page == 1) 
            {echo'<p class="boton2">Список предложений</p>';} 
            else  {echo '<a href="List.php" class="boton">Список предложений</a>';}
        if ($page == 2) 
            {echo'<p class="boton2">Поиск</p>';} 
            else  {echo '<a href="Search.php" class="boton">Поиск</a>';}
        if ($page == 3) 
            {echo'<p class="boton2">Контакты</p>';} 
            else  {echo '<a href="Contacts.php" class="boton">Контакты</a>';}
        if ($page == 4) 
            {echo'<p class="boton2">Войти</p>';} 
            else  {echo '<a href="Auth.php" class="boton">Войти</a>';}
        if ($page == 5) 
            {echo'<p class="boton2">На карте</p>';} 
            else  {echo '<a href="List.php" class="boton">На карте</a>';}

    ?> 
        </div>
