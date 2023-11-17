<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Ticket</title>
	<link rel="icon"href="imagens/ticketLogo.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
		<style>
			/* Estilo para posicionar o botão no canto direito */
			#myButton {
				position: fixed;
				top: 650px;
				right: 120px;
				
				
			}
		</style>


</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
					//chamar a conexão
					include('config.php');

					switch (@$_REQUEST['page']) {
						case 'verificar':
							include('verificar.php');
							break;
						case 'verificar-esqueceu-senha':
							include('verificar-esqueceu-senha.php');
							break;
						case 'trocar-senha':
							include('trocar-senha.php');
							break;
						case 'dashboard':
							include('dashboard.php');
							// Botão de atalho para cadastrar ticket
							if(!isset($_REQUEST['pag'])){
								echo '<a href="?page=dashboard&pag=ticket-cadastrar" id="myButton" class="btn btn-dark rounded-circle" 
								style="width: 60px; height: 60px; align-items:center; justify-content:center; display: flex;"><span style="font-size: 30px;">+</span></a>';
							}
							break;
						case 'logout':
							include('logout.php');
							break;						
						
						default:
							include("login.php");
					}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>';
</body>
</html>