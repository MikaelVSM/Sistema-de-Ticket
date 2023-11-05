<?php

include 'config.php';

session_start();

    $senha_usuario = $_POST['senha_usuario'];
    $nome_usuario = $_POST['nome_usuario'];
    
    $sql = "UPDATE usuario SET
                senha_usuario = '".md5($senha_usuario)."'
                WHERE nome_usuario = '{$nome_usuario}'";
                
            
    

    $res = $conn->query($sql);

    if($res === TRUE){
        print "<script>alert('Senha Alterada');</script>";
        print "<script>location.href='index.php';</script>";
    }else{
        print "<script>alert('Erro');</script>";
        print "<script>location.href='index.php';</script>";
        
    }

?>