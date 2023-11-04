<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO usuario_departamento (
						usuario_id_usuario, 
						departamento_id_departamento
					)VALUES(
						".$_POST["usuario_id_usuario"].", 
						".$_POST["departamento_id_departamento"]."
					)";

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso');</script>";
					print "<script>location.href='?page=dashboard&pag=atendente-listar';</script>";
				}else{
					print "<script>alert('Não cadastrou');</script>";
					print "<script>location.href='?page=dashboard&pag=atendente	-listar';</script>";
				}
			break;		
		

		case 'excluir':
			$sql = "DELETE FROM usuario_departamento WHERE id_usuario=".$_REQUEST["id_usuario"];

			$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Excluiu com sucesso');</script>";
					print "<script>location.href='?page=dashboard&pag=atendente-listar';</script>";
				}else{
					print "<script>alert('Não excluir');</script>";
					print "<script>location.href='?page=dashboard&pag=atendente-listar';</script>";
				}

			break;
	}