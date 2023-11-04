<?php
if (isset($_REQUEST['acao'])) {
    $acao = $_REQUEST['acao'];
} else {
    $acao = null; // ou qualquer valor padrão
}
    switch ($acao) {
		case 'cadastrar':
			$sql = "INSERT INTO ticket (
						departamento_id_departamento, 
						usuario_id_usuario, 
						titulo_ticket,
                        desc_ticket,
                        data_ticket,
                        hora_ticket,
                        status_ticket
					)VALUES(
						'".$_POST["departamento_id_departamento"]."', 
						'".$_POST["usuario_id_usuario"]."', 
						'".$_POST["titulo_ticket"]."',
                        '".$_POST["desc_ticket"]."',
                        '".date($_POST["data_ticket"])."',
                        '".$_POST["hora_ticket"]."',
                        '".$_POST["status_ticket"]."'
                        
					)";

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso');</script>";
					print "<script>location.href='?page=dashboard&pag=ticket-aberto';</script>";
				}else{
					print "<script>alert('Não cadastrou');</script>";
					print "<script>location.href='?page=dashboard&pag=ticket-aberto';</script>";
				}
			break;
			//inicio da case editar
			//Se o status_ticket vim igual a 3 ele fará a inserção na tebela resposta
			case "editar":
				if($_REQUEST['status_ticket'] == '3'){
					$sql = "INSERT INTO resposta (
								ticket_id_ticket,
								mensagem_resposta,
								data_resposta,
								hora_resposta,
								status_resposta
							)VALUES(
							'".$_POST["id_ticket"]."', 
							'".$_POST["mensagem_resposta"]."',
							'".date($_POST["data_resposta"])."',
							'".$_POST["hora_resposta"]."',
							'".$_POST["status_resposta"]."'
							
						)";
					$res = $conn->query($sql);
					if($res==true){
						$sql = "UPDATE ticket SET status_ticket='".$_REQUEST['status_ticket']."' WHERE id_ticket=".$_REQUEST['id_ticket'];
						$res = $conn->query($sql);
						if($res==true){
							print "<script>alert('Editado com sucesso!');</script>";
							print "<script>location.href='?page=dashboard&pag=ticket-encerrado';</script>";
						}else{
							print "<script>alert('Não foi possível editar');</script>";
							print "<script>location.href='?page=dashboard&pag=ticket-aberto';</script>";
						}
					}else{
						print "<script>alert('Não foi possível editar');</script>";
						print "<script>location.href='?page=dashboard&pag=ticket-aberto';</script>";
					}
				} else if($_REQUEST['status_ticket'] == '2'){
					$sql = "UPDATE ticket SET status_ticket='".$_REQUEST['status_ticket']."' WHERE id_ticket=".$_REQUEST['id_ticket'];
					$res = $conn->query($sql);
					if($res==true){
						print "<script>alert('Editado com sucesso!');</script>";
						print "<script>location.href='?page=dashboard&pag=ticket-andamento';</script>";
					}else{
						print "<script>alert('Não foi possível editar');</script>";
						print "<script>location.href='?page=dashboard&pag=ticket-aberto';</script>";
					}
				}
			break;
	}