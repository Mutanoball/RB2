     <form class="auth" onsubmit="return valid()">
          <br><br><br>
          <p><input id='name' type="text" size="30" placeholder="Имя" name="login"></p>
          <p class="emptywarning"></p>
          <p><input id='password' type="password" size="30" placeholder="Пароль" name="password"></p>
          <p class="emptywarning"></p>
          <p><input type="submit" style="width: 275px; font-family: DaxlinePro-Regular" value="Войти"></p>
                
     </form>
<p class = tr> здрав буде боярин <p>     
<script>
    document.forms[0].elements[0].oninput = function () {
        document.getElementsByClassName("emptywarning")[0].innerText = "";
        document.forms[0].elements[0].className = "rightfield";
    };

    document.forms[0].elements[1].oninput = function () {
        document.getElementsByClassName("emptywarning")[1].innerText = "";
        document.forms[0].elements[1].className = "rightfield";
    };

    function yes() {
        document.getElementsByClassName("tr")[0].innerText = "Лаве хуйнане";
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
        else return yes();
    }
</script>
    </body>
</html>
