<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO usuario (
						nome_usuario, 
						senha_usuario, 
						tipo_usuario
					)VALUES(
						'".$_POST["nome_usuario"]."', 
						'".md5($_POST["senha_usuario"])."', 
						'".$_POST["tipo_usuario"]."'
					)";

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso');</script>";
					print "<script>location.href='?page=dashboard&pag=usuario-listar';</script>";
				}else{
					print "<script>alert('Não cadastrou');</script>";
					print "<script>location.href='?page=dashboard&pag=usuario-listar';</script>";
				}
			break;
		
		case 'editar':
			$sql = "UPDATE usuario SET
						nome_usuario='".$_POST['nome_usuario']."',
						tipo_usuario='".$_POST['tipo_usuario']."'
					WHERE id_usuario=".$_POST["id_usuario"];

			$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Editou com sucesso');</script>";
					print "<script>location.href='?page=dashboard&pag=usuario-listar';</script>";
				}else{
					print "<script>alert('Não editou');</script>";
					print "<script>location.href='?page=dashboard&pag=usuario-listar';</script>";
				}
			break;

		case 'excluir':
			$sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];

			$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Excluiu com sucesso');</script>";
					print "<script>location.href='?page=dashboard&pag=usuario-listar';</script>";
				}else{
					print "<script>alert('Não excluir');</script>";
					print "<script>location.href='?page=dashboard&pag=usuario-listar';</script>";
				}

			break;
	}