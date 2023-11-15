<h1>Listar Atendente</h1>

<?php

// Para obter os usuários da sessão
$tipo_usuario = $_SESSION['tipo_usuario'];

// Verificação se o usuário é um administrador
if ($tipo_usuario == "1"){
	echo '<a href="gerar_PDF_usuarios.php" style="color: yellow;">Gerar PDF</a>'; // Link amarelo
	$sql = "SELECT * FROM usuario u
			INNER JOIN usuario_departamento ud
			ON u.id_usuario = ud.usuario_id_usuario
			INNER JOIN departamento d
			ON d.id_departamento = ud.departamento_id_departamento
			WHERE u.tipo_usuario = '2'";
	$res = $conn->query($sql);
	if($res->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Usuário</th>";
		print "<th>Departamento</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_usuario."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->nome_departamento."</td>";
			print "<td>
					  <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=dashboard&pag=atendente-salvar&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não foram encontrados usuários</p>";
	}
}elseif($tipo_usuario != '1'){
	$sql = "SELECT * FROM usuario u
			INNER JOIN usuario_departamento ud
			ON u.id_usuario = ud.usuario_id_usuario
			INNER JOIN departamento d
			ON d.id_departamento = ud.departamento_id_departamento
			WHERE u.tipo_usuario = '2'";
	$res = $conn->query($sql);
	if($res->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Usuário</th>";
		print "<th>Departamento</th>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_usuario."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->nome_departamento."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não foram encontrados usuários</p>";
	}
}

	
?>