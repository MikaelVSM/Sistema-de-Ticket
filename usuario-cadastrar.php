<h1>Cadastrar Usuário</h1>
<form action="?page=dashboard&pag=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Usuário</label>
		<input type="text" name="nome_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Senha</label>
		<input type="password" name="senha_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Tipo</label>
		<select name="tipo_usuario" class="form-control">
			<option>-= Escolha =-</option>
			<option value="1">Administrador</option>
			<option value="2">Atendente</option>
			<option value="3">Usuário</option>
		</select>
	</div>
	<div class="mb-3">
		<button class="btn btn-success">Enviar</button>	
	</div>
</form>
