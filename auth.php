     <form class="auth" onsubmit="return valid()" method="post">
          <br><br><br>
          <p><input id='name' type="text" size="30" placeholder="Имя" name="login"></p>
          <p class="emptywarning"></p>
          <p><input id='password' type="password" size="30" placeholder="Пароль" name="password"></p>
          <p class="emptywarning"></p>
          <p><input type="submit" style="width: 275px; font-family: DaxlinePro-Regular" value="Войти"></p>
                
     </form>
    
<script>
    
    document.forms[0].elements[0].oninput = function () {
        document.getElementsByClassName("emptywarning")[0].innerText = "";
        document.forms[0].elements[0].className = "rightfield";
    };

    document.forms[0].elements[1].oninput = function () {
        document.getElementsByClassName("emptywarning")[1].innerText = "";
        document.forms[0].elements[1].className = "rightfield";
    };

    function yes(login) {
        document.getElementsById("login")[0].innerText = login;
        
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
            yes(name)
            return true;
        }
    }
</script>

<?php

class User {
    
    function __construct($db) {
        $this->db = $db;
        @$this->login = $_POST["login"];
        @$this->password = $_POST["password"];

    }

    function loginUser () {
        
        $result = $this->db->query("SELECT * FROM Users WHERE login = '$this->login'");
        $row = $result->fetch_assoc();
        if ($this->login == ""){
            return "";
        } 
        elseif (isset ($row['login'])) {
            if (password_verify($this->password, $row['password'])) {
            session_start();
            $_SESSION["login"]=$row['login'];
            }
            else return "неправильная пара логин-пароль";
        }
        else return "неправильная пара логин-пароль";
        
        
        
    }      
         
     
}
$s = new User($app1->GetDB());
$s->loginUser();
?>    

<script>
    document.getElementsByClassName('emptywarning')[1].innerText ='<?php echo $s->loginUser();?>';
</script>

