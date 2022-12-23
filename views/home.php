  <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Let's Play - Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="../css/home.css" />        
    </head>
    
    <body>
        
		<div style="width: 100%; background-color: #000; height: 70px;">
			<div style="text-align: center; font-size: 32px; line-height: 70px; color: #fff;">
				<span>Let's Play</span> <i class="fa-solid fa-gamepad"></i>
			</div>		
		</div>

		<div class="navbar">
			<a class="active" href="#"><i class="fas fa-home"></i>&nbsp;Início</a>
			<a href="#"><i class="fas fa-angle-double-left"></i>&nbsp;Previews</a>
			<a href="#"><i class="fas fa-book"></i>&nbsp;Reviews</a>
			<a href="#"><i class="far fa-newspaper"></i>&nbsp;Notícias</a>
			<a href="#"><i class="fas fa-user-circle"></i>&nbsp;Perfil</a>
			<a href="#"><i class="fas fa-envelope"></i>&nbsp;Mensagens</a>
			<a href="#"><i class="fas fa-cogs"></i>&nbsp;Configurações</a>
			<div id="pesquisa">
				<input type="text" placeholder="Pesquisar..." />
				<button type="submit"><i class="fas fa-search"></i></button>	
			</div>
		</div>
	
		<hr />

		<div class="container">
			<div class="card">
				<div id="capa">
					<img src="thelastofus.jpg" alt="game" width="200"><span class="badge">10</span>
				</div>
				<ul>
					<li style="font-weight: bold; font-size: 18px;">The Last of Us</li>
					<li title="Plataformas"><i class="fab fa-playstation">&nbsp;</i>PS3 / PS4</li>
					<li><i class="far fa-calendar">&nbsp;</i>21/06/2013</li>  						
					<li>
						<span class="fas fa-star checked"></span>
						<span class="fas fa-star checked"></span>
						<span class="fas fa-star checked"></span>
						<span class="fas fa-star checked"></span>
						<span class="fas fa-star checked"></span>
						<span class="fas fa-star checked"></span>
						<span class="fas fa-star checked"></span>
						<span class="fas fa-star checked"></span>	
						<span class="fas fa-star checked"></span>
						<span class="fas fa-star checked"></span>				
					</li>
					<li><button><i class="fas fa-eye"></i>&nbsp;Ver análise</button></li>
				</ul>
			</div>
		</div>

		<div style="text-align: center; padding: 10px;">
			<a href="index.php">Login</a>
		</div>

		<footer>
			<strong>Todos os direitos reservados&copy; - <?=date('Y')?></strong>
		</footer>

	</body>
    
</html>
