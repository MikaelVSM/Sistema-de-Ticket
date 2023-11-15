<?php

	// Obtendo o tipo do usuário
	$tipo_usuario = $_SESSION['tipo_usuario'];

	// Verificando se é diferente de administrador
	if($tipo_usuario != '1'){
		//Alerta para usuários diferentes de usuários e caminho para outra página.
		print "<script>alert('Você não tem permissão para acessar esta página');</script>";
		print "<script>location.href='?page=dashboard';</script>";
	}
?>

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