<h1>Alterar Status</h1>

<?php
	$sql_1 = "SELECT id_ticket,departamento.nome_departamento as nome_departamento,usuario.nome_usuario as nome_usuario, titulo_ticket, desc_ticket,data_ticket,hora_ticket,status_ticket
    FROM ticket 
    INNER JOIN departamento on ticket.departamento_id_departamento = id_departamento
    INNER JOIN usuario on ticket.usuario_id_usuario = id_usuario
			WHERE id_ticket=".$_REQUEST["id_ticket"];
	$res_1 = $conn->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=dashboard&pag=ticket-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_ticket" value="<?php print $row_1->id_ticket; ?>">
		<div class="mb-3">
			<label>ID</label>
			<input type="int" name="id_ticket" value="<?php print $row_1->id_ticket; ?>" class="form-control" readonly>
		</div>
		<div class="mb-3">
			<label>Título do Ticket</label>
			<input type="text" name="titulo_ticket" value="<?php print $row_1->titulo_ticket; ?>" class="form-control" readonly>	
		</div>
		<div class="mb-3">
			<label>Usuário</label>
			<input type="text" name="usuario_id_usuario" value="<?php print $row_1->nome_usuario; ?>" class="form-control" readonly>
		</div>
		<div class="mb-3">
			<label>Departamento</label>
			<input type="text" name="usuario_id_usuario" value="<?php print $row_1->nome_departamento; ?>" class="form-control" readonly>
		</div>
		<div class="mb-3">
			<label>Descrição</label>
			<textarea type= "text" name="desc_ticket" class="form-control"><?php print $row_1->desc_ticket; ?></textarea>
		</div>
		<div class="mb-3">
			<label>Status</label>
			<select id="status_ticket" name="status_ticket" class="form-control" onchange="showHideField()">
				<option>-= Escolha =-</option>
				<option value="1" <?php print ($row_1->status_ticket==1?"selected":""); ?>>Aberto</option>
				<option value="2" <?php print ($row_1->status_ticket==2?"selected":""); ?>>Andamento</option>
				<option value="3" <?php print ($row_1->status_ticket==3?"selected":""); ?>>Fechar</option>
			</select>
		</div>
    <div id="extraField" class="mb-3" style="display: none;">
        <label>Resposta</label>
			<textarea type= "text" name="mensagem_resposta" class="form-control"></textarea>
		<label>Data da Resposta</label>
			<input type="date" name="data_resposta" class="form-control">
		<label>Hora da Resposta</label>
			<input type="time" name="hora_resposta" class="form-control">
		<label>Status</label>
    		<select name="status_resposta" class="form-control">
				<option value="1">Resolvido</option>
			</select>
    </div>	
	<div class="mb-3">
		<button class="btn btn-success">Enviar</button>	
	</div>
</form>
<script>
function showHideField() {
  var selectBox = document.getElementById('status_ticket');
  var extraField = document.getElementById('extraField');
  extraField.style.display = selectBox.value == '3' ? 'block' : 'none';
}
</script>







