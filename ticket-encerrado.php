<h1>Chamados Encerrados</h1>

<?php
use Svg\Document;

$nome_usuario = $conn->real_escape_string($_SESSION['nome']);
$tipo_usuario = $_SESSION['tipo_usuario'];

if($tipo_usuario == '1'){
	echo '<a href="gerar_PDF_usuarios.php" style="color: yellow;">Gerar PDF</a>';

	$sql = "SELECT ticket.*, departamento.nome_departamento, usuario.nome_usuario, resposta.*
	FROM ticket
	INNER JOIN departamento ON ticket.departamento_id_departamento = departamento.id_departamento
	INNER JOIN usuario ON ticket.usuario_id_usuario = usuario.id_usuario
	LEFT JOIN resposta ON ticket.id_ticket = resposta.ticket_id_ticket
	WHERE status_ticket = '3'";

	$res = $conn->query($sql);

	if($res->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Departamento</th>";
		print "<th>usuário</th>";
		print "<th>Título</th>";
		print "<th>Descrição</th>";
		print "<th>Data</th>";
		print "<th>Hora</th>";
		print "<th></th>";
		print "</tr>";
			while($row = $res->fetch_object()){
		print "<tr>";
		print "<td>".$row->id_ticket."</td>";
		print "<td>".$row->nome_departamento."</td>";
		print "<td>".$row->nome_usuario."</td>";
		print "<td>".$row->titulo_ticket."</td>";
		print "<td>".$row->desc_ticket."</td>";
		print "<td>".$row->data_ticket."</td>";
		print "<td>".$row->hora_ticket."</td>";
		// Butão para mostrar os dados da resposta
		print "<td><button onclick='myFunction(".$row->id_ticket.")'>Mostrar Resposta</button></td>";
		print "</tr>";
		print "<tr id='resposta".$row->id_ticket."' style='display:none'>";
		print "<td colspan='8'>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		// Campos para receber os dados da resposta
		print "<th>Data da Resposta</th>";
		print "<th>Hora da Resposta</th>";
		print "<th>Mensagem da Resposta</th>";
		print "<th>Status</th>";
		print "</tr>";
		print "<tr>";
		// Os dados da tabela resposta
		print "<td>".$row->data_resposta."</td>";
		print "<td>".$row->hora_resposta."</td>";
		print "<td>".$row->mensagem_resposta."</td>";
		print "<td>".($row->status_resposta==1 ? "Resolvido" : "Não resolvido")."</td>";
		print "</tr>";
		print "</table>";
		print "</td>";
		print "</tr>";
}
print "</table>";
	}else{
		print "<p>Não encontrou resultados</p>";
	}
	
}elseif($tipo_usuario != '1'){
	$sql = "SELECT ticket.*, departamento.nome_departamento, usuario.nome_usuario, resposta.*
	FROM ticket
	INNER JOIN departamento ON ticket.departamento_id_departamento = departamento.id_departamento
	INNER JOIN usuario ON ticket.usuario_id_usuario = usuario.id_usuario
	LEFT JOIN resposta ON ticket.id_ticket = resposta.ticket_id_ticket
	WHERE status_ticket = '3'";

	$res = $conn->query($sql);

	if($res->num_rows > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Departamento</th>";
		print "<th>usuário</th>";
		print "<th>Título</th>";
		print "<th>Descrição</th>";
		print "<th>Data</th>";
		print "<th>Hora</th>";
		print "<th></th>";
		print "</tr>";
			while($row = $res->fetch_object()){
		print "<tr>";
		print "<td>".$row->id_ticket."</td>";
		print "<td>".$row->nome_departamento."</td>";
		print "<td>".$row->nome_usuario."</td>";
		print "<td>".$row->titulo_ticket."</td>";
		print "<td>".$row->desc_ticket."</td>";
		print "<td>".$row->data_ticket."</td>";
		print "<td>".$row->hora_ticket."</td>";
		// Butão para mostrar os dados da resposta
		print "<td><button onclick='myFunction(".$row->id_ticket.")'>Mostrar Resposta</button></td>";
		print "</tr>";
		print "<tr id='resposta".$row->id_ticket."' style='display:none'>";
		print "<td colspan='8'>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		// Campos para receber os dados da resposta
		print "<th>Data da Resposta</th>";
		print "<th>Hora da Resposta</th>";
		print "<th>Mensagem da Resposta</th>";
		print "<th>Status</th>";
		print "</tr>";
		print "<tr>";
		// Os dados da tabela resposta
		print "<td>".$row->data_resposta."</td>";
		print "<td>".$row->hora_resposta."</td>";
		print "<td>".$row->mensagem_resposta."</td>";
		print "<td>".($row->status_resposta==1 ? "Resolvido" : "Não resolvido")."</td>";
		print "</tr>";
		print "</table>";
		print "</td>";
		print "</tr>";
}
print "</table>";
	}else{
		print "<p>Não encontrou resultados</p>";
	}

}
?>
	<script>
		function myFunction(id) {
		var x = document.getElementById('resposta' + id);
			if (x.style.display === "none") {
				x.style.display = "table-row";
			} else {
				x.style.display = "none";
			}
		}
			
	</script>
