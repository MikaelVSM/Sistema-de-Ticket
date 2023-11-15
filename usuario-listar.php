
<h1>Listar Usuários</h1>

<?php

	// Para obter os usuários da sessão
	$tipo_usuario = $_SESSION['tipo_usuario'];

	// Verificação se o usuário é um administrador
	if ($tipo_usuario == "1"){
		echo '<a href="gerar_PDF_usuarios.php" style="color: black;">Gerar PDF</a>'; // Link amarelo
	$sql = "SELECT * FROM usuario";
	$res = $conn->query($sql);
	if($res->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Usuário</th>";
		print "<th>Tipo</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			switch($row->tipo_usuario){
				case '1':
					$tipo = "Administrador";
				break; 
				case '2':
					$tipo = "Atendente";
				break;
				case '3':
					$tipo = "Usuário";
				break;
			}
			print "<tr>";
			print "<td>".$row->id_usuario."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$tipo."</td>";
			print "<td>
					  <button onclick=\"location.href='?page=dashboard&pag=usuario-editar&id_usuario=".$row->id_usuario."';\" class='btn btn-outline-success'>Editar</button>
					  <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=dashboard&pag=usuario-salvar&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\"  class='btn btn-outline-danger'>Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não foram encontrados usuários</p>";
	}

	//Verifica se o usuário é um atendente

	}elseif($tipo_usuario == '2'){
		$sql = "SELECT * FROM usuario
		WHERE tipo_usuario > '1'" ;
		$res = $conn->query($sql);
		if($res->num_rows > 0){
			print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Usuário</th>";
			print "<th>Tipo</th>";
			print "</tr>";
			while ($row = $res->fetch_object()) {
				switch($row->tipo_usuario){
					case '1':
						$tipo = "Administrador";
					break; 
					case '2':
						$tipo = "Atendente";
					break;
					case '3':
						$tipo = "Usuário";
					break;
				}
				print "<tr>";
				print "<td>".$row->id_usuario."</td>";
				print "<td>".$row->nome_usuario."</td>";
				print "<td>".$tipo."</td>";
				print "</tr>";
			}
			print "</table>";
		}else{
			print "<p>Não foram encontrados usuários</p>";
		}	
		
	// Verificar se é um usuário normal
	
	}elseif($tipo_usuario == "3"){
		print "<p>Você não tem permissão para visualizar está página.</p>";

	}else{
		print "<p>Não foram encontrados usuários</p>";
	}

?>