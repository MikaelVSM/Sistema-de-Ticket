<h1>Editar Usuário</h1>
<?php
	$sql_1 = "SELECT * FROM usuario 
			WHERE id_usuario=".$_REQUEST["id_usuario"];
	$res_1 = $conn->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=dashboard&pag=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_usuario" value="<?php print $row_1->id_usuario; ?>">
	<div class="mb-3">
		<label>Usuário</label>
		<input type="text" name="nome_usuario" value="<?php print $row_1->nome_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Tipo</label>
		<select name="tipo_usuario" class="form-control">
			<option>-= Escolha =-</option>
			<option value="1" <?php print ($row_1->tipo_usuario==1?"selected":""); ?>>Administrador</option>
			<option value="2" <?php print ($row_1->tipo_usuario==2?"selected":""); ?>>Atendente</option>
			<option value="3" <?php print ($row_1->tipo_usuario==3?"selected":""); ?>>Usuário</option>
		</select>
	</div>
	<div class="mb-3">
		<button class="btn btn-success">Enviar</button>	
	</div>
</form>
