<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Ticket</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>