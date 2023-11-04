<h1>Listar Departamentos</h1>
<a href="gerar_PDF_departamento.php">Gerar PDF</a>
<?php
	$sql = "SELECT * FROM departamento";

	$res = $conn->query($sql);

	if($res->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Departamento</th>";
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
?>