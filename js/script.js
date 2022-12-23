function save() {
            
    var name = document.getElementById("name").value.trim().toUpperCase();
    var email = document.getElementById("email").value.trim().toLowerCase();
    var emailconfirm = document.getElementById("emailconfirm").value.trim().toLowerCase();
    var password = document.getElementById("password").value;
    var day = document.getElementById("day").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    var birthdate = day + "-" + month + "-" + year;
    var alertsdiv = document.getElementById("alertsdiv");
    var icon = document.getElementById("icon");
    icon.classList.add("fas");
    icon.classList.add("fa-lg");
    var msgspan = document.getElementById("msgspan");
    if(name === "") {
        msgspan.innerHTML = "O nome precisa ser informado";
        alertsdiv.classList.add("alert-warning");
        icon.classList.add("fa-exclamation-triangle");
        alertsdiv.style.display = "block";
        document.getElementById("name").focus();
        return;
    }
    else if(email === "") {
        msgspan.innerHTML = "O e-mail precisa ser informado";
        alertsdiv.classList.add("alert-warning");
        icon.classList.add("fa-exclamation-triangle");
        alertsdiv.style.display = "block";
        document.getElementById("email").focus();
        return;
    }
    else if(emailconfirm === "") {
        msgspan.innerHTML = "O e-mail precisa ser confirmado";
        alertsdiv.classList.add("alert-warning");
        icon.classList.add("fa-exclamation-triangle");
        alertsdiv.style.display = "block";
        document.getElementById("emailconfirm").focus();
        return;
    }
    else if(password === "") {
        msgspan.innerHTML = "A senha precisa ser informada";
        alertsdiv.classList.add("alert-warning");
        icon.classList.add("fa-exclamation-triangle");
        alertsdiv.style.display = "block";
        document.getElementById("password").focus();
        return;
    }
    else if(day === "" || month === "" || year === "") {
        msgspan.innerHTML = "A data de nascimento precisa ser informada";
        alertsdiv.classList.add("alert-warning");
        icon.classList.add("fa-exclamation-triangle");
        alertsdiv.style.display = "block";
        document.getElementById("day").focus();
        return;
    }    
                  
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState === 4 && this.status === 200) {
            var resposta = JSON.parse(this.responseText);
            if(resposta === true) {
                window.location.href = "main.php";
            }
            else {
                msgspan.innerHTML = "Erro ao tentar fazer a inscrição";
                alertsdiv.classList.remove("alert-warning");
                alertsdiv.classList.add("alert-error");                            
                icon.classList.add("fa-times");
                alertsdiv.style.display = "block";                          
            }                        
        }
    };
    xhttp.open("POST", "../controller/UserController.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("query=save&name=" + name + "&email=" + email + "&password=" + password + "&birthdate=" + birthdate);

}
