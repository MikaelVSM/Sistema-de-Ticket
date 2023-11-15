<h1>Tickets Abertos</h1>

<?php

	//Obter o usuário da sessão
	$nome_usuario = $conn->real_escape_string($_SESSION['nome']);
	$tipo_usuario = $_SESSION['tipo_usuario'];

	if($tipo_usuario == '1'){
		echo'<a href="gerar_PDF_ticketAberto.php">Gerar PDF</a>';

	$sql = "SELECT id_ticket,departamento.nome_departamento as nome_departamento,usuario.nome_usuario as nome_usuario, titulo_ticket, desc_ticket,data_ticket,hora_ticket
    FROM ticket 
    INNER JOIN departamento on ticket.departamento_id_departamento = id_departamento
    INNER JOIN usuario on ticket.usuario_id_usuario = id_usuario
	WHERE status_ticket ='1'" ;

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
        print "<th>Alterar Status</th>";
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
			print "<td>
					  <button onclick=\"location.href='?page=dashboard&pag=ticket-editar&id_ticket=".$row->id_ticket."';\" class='btn btn-success'>Alterar Status</button>
			       </td>";

			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultados</p>";
	}
}elseif($tipo_usuario == '2'){
	$sql = "SELECT ticket.id_ticket, departamento.nome_departamento as nome_departamento,
	usuario.nome_usuario as nome_usuario, titulo_ticket, desc_ticket, data_ticket, hora_ticket
	FROM ticket
	INNER JOIN departamento on ticket.departamento_id_departamento = departamento.id_departamento
	INNER JOIN usuario on ticket.usuario_id_usuario = usuario.id_usuario
	WHERE status_ticket = '1' AND departamento.id_departamento =
	(SELECT departamento_id_departamento FROM usuario WHERE nome_usuario = '{$nome_usuario}')"; 

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
        print "<th>Alterar Status</th>";
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
			print "<td>
					  <button onclick=\"location.href='?page=dashboard&pag=ticket-editar&id_ticket=".$row->id_ticket."';\" class='btn btn-success'>Alterar Status</button>
			       </td>";

			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultados</p>";
	}
}
