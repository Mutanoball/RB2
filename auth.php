     <form class="auth" onsubmit="return valid()" method="post">
          <br><br><br>
          <p><input id='name' type="text" size="30" placeholder="Имя" name="login"></p>
          <p class="emptywarning"></p>
          <p><input id='password' type="password" size="30" placeholder="Пароль" name="password"></p>
          <p class="emptywarning"></p>
          <p><input type="submit" style="width: 275px; font-family: DaxlinePro-Regular" value="Войти"></p>
                
     </form>
<p class = 'login'><p>     
<script>
    var login = '';
    document.forms[0].elements[0].oninput = function () {
        document.getElementsByClassName("emptywarning")[0].innerText = "";
        document.forms[0].elements[0].className = "rightfield";
    };

    document.forms[0].elements[1].oninput = function () {
        document.getElementsByClassName("emptywarning")[1].innerText = "";
        document.forms[0].elements[1].className = "rightfield";
    };

    function yes() {
        login = document.forms[0].elements[0].value;
        document.getElementsByClassName("login")[0].innerText = login;
        
    };

    function no(name, password) {
        if (password.value == "") {
            document.getElementsByClassName("emptywarning")[1].innerText = "пожалуйста, введите пароль";
            password.className = "wrongfield";
            password.focus();
        }
        if (name.value == "") {
            document.getElementsByClassName("emptywarning")[0].innerText = "пожалуйста, введите логин";
            name.className = "wrongfield";
            name.focus();
        };
    };

    function valid() {
        var name = document.forms[0].elements[0];
        var password = document.forms[0].elements[1];
        if (name.value == "" || password.value == "") {
            no(name, password);
            return false;
        }
        else {
            yes()
            return true;
        }
    }
</script>
    </body>
</html>
<?php

class User {
    
    function __construct($db) {
       $this->db = $db;
       @$this->login = $_POST["login"];
    }

    function defineUser (){
        $result = $this->db->query("SELECT * FROM Users"); 
              
        while ($row = $result->fetch_row()){
           
           $login = $row[1];
           if ($login == $this->login) {
               return $login;
               break;
           }
           
       }
    }
     
}
$s = new User($app1->GetDB());
$login = $s->defineUser();
if (isset ($login)) {
    session_start();
    $_SESSION["login"]=$login;
}
echo $_SESSION["login"];

?>