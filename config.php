<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'ticket');

	$conn = new MySQLi(HOST,USER,PASS,BASE);

	//verificar conexão
	if($conn->connect_errno){
		printf("Conexão falhou", $conn->connect_error);
		exit();
	}