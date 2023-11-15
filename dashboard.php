<?php
	session_start();

	if(empty($_SESSION)){
		print "<script>location.href='index.php';</script>";
	}

  include('menu.php');
  

  switch(@$_REQUEST['pag']){
    //departamento
    case 'departamento-cadastrar':
      include('departamento-cadastrar.php');
      break;
    case 'departamento-editar':
      include('departamento-editar.php');
      break;
    case 'departamento-listar':
      include('departamento-listar.php');
      break;
    case 'departamento-salvar':
      include('departamento-salvar.php');
      break;
    //usuario
    case 'usuario-cadastrar':
      include('usuario-cadastrar.php');
      break;
    case 'usuario-editar':
      include('usuario-editar.php');
      break;
    case 'usuario-listar':
      include('usuario-listar.php');
      break;
    case 'usuario-salvar':
      include('usuario-salvar.php');
      break;
    //atendente
    case 'atendente-cadastrar':
      include('atendente-cadastrar.php');
      break;
    case 'atendente-editar':
      include('atendente-editar.php');
      break;
    case 'atendente-listar':
      include('atendente-listar.php');
      break;
    case 'atendente-salvar':
      include('atendente-salvar.php');
      break;
      //ticket
      case 'ticket-cadastrar':
        include('ticket-cadastrar.php');
        break;
      case 'ticket-editar':
          include('ticket-editar.php');
          break;
      case 'ticket-aberto':
        include('ticket-aberto.php');
        break;
      case 'ticket-andamento':
        include('ticket-andamento.php');
        break;
      case 'ticket-encerrado':
        include('ticket-encerrado.php');
        break;
        case 'ticket-salvar':
          include('ticket-salvar.php');
        break;

    default:
      include('main.php');
  }
?>