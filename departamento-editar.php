<h1>Editar Departamento</h1>
<?php
	$sql = "SELECT * FROM departamento WHERE id_departamento=".$_REQUEST['id_departamento'];

	$res = $conn->query($sql);

	$row = $res->fetch_object();
?>
<form action="?page=dashboard&pag=departamento-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_departamento" value="<?php echo $row->id_departamento; ?>">
	<div class="mb-3">
		<label>Nome do Departamento</label>
		<input type="text" name="nome_departamento" value="<?php echo $row->nome_departamento; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>