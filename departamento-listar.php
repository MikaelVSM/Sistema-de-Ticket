<h1>Listar Setores</h1>

<?php
	// Obter os usuários da sessão
	$tipo_usuario = $_SESSION['tipo_usuario'];

	// Se o usuário for um administrador 
	if($tipo_usuario == '1'){
		echo '<a href="gerar_PDF_usuarios.php" style="color: yellow;">Gerar PDF</a>'; // Link amarelo
	$sql = "SELECT * FROM departamento";

	$res = $conn->query($sql);

	if($res->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Setor</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_departamento."</td>";
			print "<td>".$row->nome_departamento."</td>";
			print "<td>
					  <button onclick=\"location.href='?page=dashboard&pag=departamento-editar&id_departamento=".$row->id_departamento."';\" class='btn btn-success'>Editar</button>
					  <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=dashboard&pag=departamento-salvar&acao=excluir&id_departamento=".$row->id_departamento."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultados</p>";
	}
	
}elseif($tipo_usuario != '1'){
	$sql = "SELECT * FROM departamento";

	$res = $conn->query($sql);

	if($res->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Departamento</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_departamento."</td>";
			print "<td>".$row->nome_departamento."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultados</p>";
	}
}
?>