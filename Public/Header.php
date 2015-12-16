        
        <link rel="stylesheet" type="text/css" href="Main.css"/>
       <script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
        <hr class= "nomar" size=30 color=#088></hr>
        <div class="pervaplashka"><br><b>База первичной недвижимости Оренбурга</b><br></div>
        <div class="menu">
        
    <?php    
        if ($page == 1) 
            {echo'<p class="menu-item_state_active">Список предложений</p>';} 
            else  {echo '<a href="List.php" class="menu-item">Список предложений</a>';}
        if ($page == 2) 
            {echo'<p class="menu-item_state_active">Поиск</p>';} 
            else  {echo '<a href="Search.php" class="menu-item">Поиск</a>';}
        if ($page == 3) 
            {echo'<p class="menu-item_state_active">Контакты</p>';} 
            else  {echo '<a href="Contacts.php" class="menu-item">Контакты</a>';}
        if ($page == 4) 
            {echo'<p class="menu-item_state_active">Войти</p>';} 
            else  {echo '<a href="Auth.php" class="menu-item">Войти</a>';}
        if ($page == 5) 
            {echo'<p class="menu-item_state_active">На карте</p>';} 
            else  {echo '<a href="Onmap.php" class="menu-item">На карте</a>';}

    ?> 
        </div>
