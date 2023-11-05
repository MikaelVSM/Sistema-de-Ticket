<?php

include 'config.php';

	session_start();

	$usuario = $_POST['nome_usuario'];
	$pergunta_seguranca_usuario= $_POST['pergunta_seguranca_usuario'];
	$resposta_seguranca_usuario= $_POST['resposta_seguranca_usuario'];

	$sql = "SELECT * FROM usuario
			WHERE nome_usuario='{$usuario}'
			AND pergunta_seguranca_usuario={$pergunta_seguranca_usuario}
			AND resposta_seguranca_usuario='{$resposta_seguranca_usuario}'";	

			//die($sql);

	$res = $conn->query($sql);

	if($res->num_rows > 0){
		print "<script>location.href='trocar-senha.php';</script>";
	}else{
		print "<script>alert('Dados incorretos');</script>";
		print "<script>location.href='index.php';</script>";
	}

?>


