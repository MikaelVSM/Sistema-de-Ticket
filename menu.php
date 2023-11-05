<nav class="navbar navbar-expand-lg navbar-dark mb-5 w-100" style="background-color:Navy;">
<div class="container-fluid">
    <a class="navbar-brand" href="?page=dashboard"><i class="bi bi-ticket"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=dashboard">Home</a>
        </li>         
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Usuário
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=dashboard&pag=usuario-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=dashboard&pag=usuario-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           	 Departamento
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=dashboard&pag=departamento-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=dashboard&pag=departamento-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Atendentes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=dashboard&pag=atendente-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=dashboard&pag=atendente-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           	 Ticket
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=dashboard&pag=ticket-cadastrar">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=dashboard&pag=ticket-aberto">Abertos</a></li>
            <li><a class="dropdown-item" href="?page=dashboard&pag=ticket-andamento">Em Andamento</a></li>
            <li><a class="dropdown-item" href="?page=dashboard&pag=ticket-encerrado">Fechados</a></li>
          </ul>
        </li>
      </ul>      
    </div>
    <span class="navbar-text d-flex">
      	<span class="me-2">Olá <?php print $_SESSION["nome"]; ?></span>
      	<a href="?page=logout" class='btn btn-danger btn-sm'>Sair</a>
    </span>	
</div>
</nav>