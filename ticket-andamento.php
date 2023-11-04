<h1>Tickets em Andamento</h1>
<a href="gerar_PDF_ticketAndamento.php">Gerar PDF</a>
<?php
	$sql = "SELECT id_ticket,departamento.nome_departamento as nome_departamento,usuario.nome_usuario as nome_usuario, titulo_ticket, desc_ticket,data_ticket,hora_ticket
    FROM ticket 
    INNER JOIN departamento on ticket.departamento_id_departamento = id_departamento
    INNER JOIN usuario on ticket.usuario_id_usuario = id_usuario
	WHERE status_ticket ='2'" ;

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
					  <button onclick=\"location.href='?page=dashboard&pag=ticket-editar&id_ticket=".$row->id_ticket."';\" class='btn btn-warning'>Alterar Status</button>
			       </td>";

			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultados</p>";
	}
?>