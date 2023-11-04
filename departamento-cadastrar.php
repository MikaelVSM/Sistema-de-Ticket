<h1>Cadastrar Departamento</h1>
<form action="?page=dashboard&pag=departamento-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Departamento</label>
		<input type="text" name="nome_departamento" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>