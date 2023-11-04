<h1>Cadastrar Usuário</h1>
<form action="?page=dashboard&pag=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Usuário</label>
		<input type="text" name="nome_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Senha</label>
		<input type="password" name="senha_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Escolha sua Pergunta de Segurança</label>
		<select name="pergunta_seguranca_usuario" class="form-control">
			<option>-= Escolha =-</option>
			<option value="1">Qual o nome de seu tio favorito?</option>
			<option value="2">Onde você encontrou seu/sua marido/mulher?</option>
			<option value="3">Qual o apelido de seu primo mais velho?</option>
			<option value="4">Qual o apelido de seu filho mais velho?</option>
			<option value="5">Qual o apelido de seu filho mais novo? </option>
			<option value="6">Qual o nome de sua sobrinha mais velha?</option>
			<option value="7">Qual o nome de seu sobrinho mais velho?</option>
			<option value="8">Qual o nome de sua tia favorita?</option>
			<option value="9">Onde você passou sua lua-de-mel?</option>
			<option value="10">Qual o nome de um professor importante para você?</option>
		</select>
	</div>
	<div class="mb-3">
		<label>Sua Resposta</label>
		<input type="text" name="resposta_seguranca_usuario" class="form-control">
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
