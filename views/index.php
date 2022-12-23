<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Let's Play - Index</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel="stylesheet" type="text/css" href="../css/buttons.css" />
    </head>
    
    <body>
        
        <div style="width: 100%; background-color: #000; height: 70px;">
            <div style="text-align: center; font-size: 32px; line-height: 70px; color: #fff;">
                <span>Let's Play</span> <i class="fa-solid fa-gamepad"></i>
            </div>		
	    </div>
        
        <div class="content">
            
            <form>
                <label>Login:</label>
                <input type="text" placeholder="Informe o e-mail" name="ulogin" required />
                <label>Senha:</label>
                <input type="password" placeholder="Informe a senha" name="upass" required />                
                <button type="button" class="buttonmd buttonconfirm" onclick="logar();">
                    <i class="fas fa-key"></i>&nbsp;Login
                </button>
                <div>
                    <a href="./signup.php">Criar uma conta</a>&nbsp;
                    <a href="./home.php">Home</a> 
                </div>
            </form>            
        </div>
        
        <div class="footer">
            <label>Todos os direitos reservados&COPY; - <?= date('Y') ?></label>
        </div>
        
    </body>
    
</html>
