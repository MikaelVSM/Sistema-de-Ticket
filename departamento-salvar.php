<?php
	switch($_REQUEST['acao']){
		case "cadastrar":
			$sql = "INSERT INTO departamento (nome_departamento) VALUES ('".$_REQUEST['nome_departamento']."')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=dashboard&pag=departamento-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=dashboard&pag=departamento-listar';</script>";
			}
		break;
		case "editar":
			$sql = "UPDATE 
					departamento SET 
					nome_departamento='".$_REQUEST['nome_departamento']."'
					WHERE id_departamento=".$_REQUEST['id_departamento'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=dashboard&pag=departamento-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar	');</script>";
				print "<script>location.href='?page=dashboard&pag=departamento-listar';</script>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM departamento WHERE id_departamento=".$_REQUEST['id_departamento'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluído com sucesso!');</script>";
				print "<script>location.href='?page=dashboard&pag=departamento-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=dashboard&pag=departamento-listar';</script>";
			}
		break;
	}