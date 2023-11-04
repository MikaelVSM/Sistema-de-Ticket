<?php
	session_start();

	if(empty($_POST) or $_POST['usuario']){
		print "<script>location.href='index.php';</script>";
	}

	$usuario = $_POST['nome_usuario'];
	$data_nascimento = $_POST['data_nascimento'];
    $rgm = $_POST['rgm'];
    $cpf = $_POST['cpf'];

	$sql = "SELECT * FROM usuario
			WHERE nome_usuario='{$usuario}'
			AND (data_nascimento)='{$data_nascimento}'
            AND rgm='{$rgm}'
            AND cpf='{$cpf}';";	

			//die($sql);

	$res = $conn->query($sql);

	if($res->num_rows > 0){
		$_SESSION['nome'] = $usuario;
		print "<script>location.href='?page=trocar-senha&{$page}';</script>";
	}else{
		print "<script>alert('Dados incorretos');</script>";
		print "<script>location.href='index.php';</script>";
	}