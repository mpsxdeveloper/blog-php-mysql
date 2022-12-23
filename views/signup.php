<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Let's Play - Signup</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="../css/signup.css" />
        <link rel="stylesheet" type="text/css" href="../css/buttons.css" />
        <link rel="stylesheet" type="text/css" href="../css/alerts.css" />
        <script src="../js/script.js"></script>
    </head>
    
    <body>
       
        <div style="width: 100%; background-color: #000; height: 70px;">
            <div style="text-align: center; font-size: 32px; line-height: 70px; color: #fff;">
                <span>Let's Play</span> <i class="fa-solid fa-gamepad"></i>
            </div>
	    </div>
        
        <div id="main" style="width: 45%; margin: 0 auto;">
        
        <form>
            <label>Nome:</label>
            <input type="text" placeholder="Informe seu nome" name="name" id="name" required />
            <label>E-mail:</label>
            <input type="text" placeholder="Informe seu e-mail" name="email" id="email" required />
            <label>Confirmar E-mail:</label>
            <input type="text" placeholder="Confirme seu e-mail" name="emailconfirm" id="emailconfirm" required />
            <label>Senha:</label>
            <input type="password" placeholder="Escolha uma senha" name="password" id="password" required />
            <label>Nascimento:</label>
            <div>
                <select name="day" id="day" style="width: 15%;" required>
                    <option value="">Dia</option>
                    <script>
                        var daySelect = document.getElementById("day");
                        for(var i = 1; i < 32; i++) {
                            var option = document.createElement("option");
                            option.value = (i < 10 ? "0" + i : i);
                            option.text = (i < 10 ? "0" + i : i);
                            daySelect.appendChild(option);
                        }
                    </script>                    
                </select>
                <select name="month" id="month" style="width: 30%;" required><option value="">Mês</option>
                    <option value="01">JANEIRO</option>
                    <option value="02">FEVEREIRO</option>
                    <option value="03">MARÇO</option>
                    <option value="04">ABRIL</option>
                    <option value="05">MAIO</option>
                    <option value="06">JUNHO</option>
                    <option value="07">JULHO</option>
                    <option value="08">AGOSTO</option>
                    <option value="09">SETEMBRO</option>
                    <option value="10">OUTUBRO</option>
                    <option value="11">NOVEMBRO</option>
                    <option value="12">DEZEMBRO</option>
                </select>
                <select name="year" id="year" style="width: 15%;" required>
                    <option value="">Ano</option>
                    <script>
                        var yearSelect = document.getElementById("year");
                        for(i = ((new Date().getFullYear()) - 18); i > 1959; i--) {
                            var option = document.createElement("option");
                            option.value = i;
                            option.text = i;
                            yearSelect.appendChild(option);
                        }
                    </script>
                </select>
            </div>
            <div style="text-align: right;">
                <label>Eu concordo com os <a href="#">termos</a> ao me cadastrar nesse site</label>
                <input type="checkbox" name="uagree" value="" required />
            </div>
            <div style="margin-top: 10px;">
                <div class="alert" id="alertsdiv">
                    <i id="icon"></i>
                    <span class="alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span>&nbsp;
                    <span class="alert-msg" id="msgspan"></span>
                </div>
            </div>
            <button type="button" class="buttonmd buttonconfirm" style="float: right;" onclick="save();">
                <i class="fas fa-save"></i>&nbsp;Cadastrar
            </button>
            <div style="margin-top: 15%;">
                <a href="./index.php">Fazer login</a>
            </div>
        </form>            
    </div>     
       
    <div class="footer">
        <label>Todos os direitos reservados&COPY; - <?= date('Y') ?></label>
    </div>    
        
    </body>
    
</html>
