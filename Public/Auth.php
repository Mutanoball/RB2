<html>  
    <head>
        <meta charset="utf-8"/>
        <title>База первичной недвижимости Оренбурга</title>
        <link rel="stylesheet" type="text/css" href="Main.css"/>
    </head>
    
    <body>
    <?php 
    $page=4;
    include "Header.php";
    ?>
     <form class="auth" onsubmit="return valid()">
          <br><br><br>
          <p><input id='name' type="text" size="30" placeholder="Имя" name="login"></p>
          <p class="emptywarning"></p>
          <p><input id='password' type="password" size="30" placeholder="Пароль" name="password"></p>
          <p class="emptywarning"></p>
          <p><input type="submit" style="width: 275px; font-family: DaxlinePro-Regular" value="Войти"></p>
                
     </form>
     
         <script>

             document.forms[0].elements[0].oninput = function () 
             { 
             document.getElementsByClassName("emptywarning")[0].innerText = "";
             document.forms[0].elements[0].className = "rightfield";
             };

             document.forms[0].elements[1].oninput = function () 
             { 
             document.getElementsByClassName("emptywarning")[1].innerText = "";
             document.forms[0].elements[1].className = "rightfield";
             };
                          
              function yes() { alert("good") };
              function no(name, password)
              {
                   if (name.value == "")
                   {
                        document.getElementsByClassName("emptywarning")[0].innerText = "пожалуйста, введите логин";
                        name.className = "wrongfield";
                   };
                   if (password.value == "")
                   {
                        document.getElementsByClassName("emptywarning")[1].innerText = "пожалуйста, введите пароль";
                        password.className = "wrongfield";
                   }

              };
              function valid()
              {
                   var name = document.forms[0].elements[0];
                   var password = document.forms[0].elements[1];
                   if (name.value == "" || password.value == "")
                   {
                        no(name, password);
                        return false;
                   }
                   else return yes();
              }

     </script>
    
    </body>
</html>
