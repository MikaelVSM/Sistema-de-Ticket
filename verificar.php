<?php
	session_start();

	if(empty($_POST) or $_POST['usuario']){
		print "<script>location.href='index.php';</script>";
	}

	$usuario = $_POST['nome_usuario'];
	$senha   = $_POST['senha_usuario'];

	$sql = "SELECT * FROM usuario
			WHERE nome_usuario='{$usuario}'
			AND senha_usuario='".md5($senha)."'";

			//die($sql);

	$res = $conn->query($sql);

	if($res->num_rows > 0){
		$_SESSION['nome'] = $usuario;
		print "<script>location.href='?page=dashboard';</script>";
	}else{
		print "<script>alert('Usuário e/ou senha incorreto');</script>";
		print "<script>location.href='index.php';</script>";
	}