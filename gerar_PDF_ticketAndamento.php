<?php

// carregar Composer
require './vendor/autoload.php';

// Informações para o PDF
$dados = "<!DOCTYPE html>";
$dados .= "<html lang = 'pt-br'>";
$dados .= "<head>";
$dados .= "<meta charset = 'UTF-8'>";
$dados .= "<style>";
$dados .= "table {border-collapse; collapse; width: 100%;}";
$dados .= "th, td {border: 1px solid black; padding: 8px; text-align: left;}";
$dados .= "</style>";
$dados .= "</head>";
$dados .= "<body>";
$dados .= "<h1>Tickets em Andamento</h1>";

// Incluir conexao com banco de dados
include_once './config.php';

// Query para recuperar os registros do banco de dados
$query_usuarios = "SELECT id_ticket,departamento.nome_departamento as nome_departamento,usuario.nome_usuario as nome_usuario, titulo_ticket, desc_ticket,data_ticket,hora_ticket
                    FROM ticket 
                    INNER JOIN departamento on ticket.departamento_id_departamento = id_departamento
                    INNER JOIN usuario on ticket.usuario_id_usuario = id_usuario
                    WHERE status_ticket ='2'" ;

// Preparar a QUERY
$result_usuarios = $conn->prepare($query_usuarios);

// Executar a QUERY
$result_usuarios->execute();

// Vincular as colunas do resultado às variáveis
mysqli_stmt_bind_result($result_usuarios, $id_ticket, $nome_departamento, $nome_usuario, $titulo_ticket, $desc_ticket, $data_ticket, $hora_ticket);

// Iniciar a tabela
$dados .= "<table>";
$dados .= "<tr><th>ID Ticket</th><th>Nome do Departamento</th><th>Nome do Usuário</th><th>Título do Ticket</th><th>Descrição</th><th>Data</th><th>Hora</th>
<th>Status</th></tr>";

// Ler os registros retornados do BD
while(mysqli_stmt_fetch($result_usuarios)){
    $status = $status_ticket == 2 ? "" : "Andamento";
    $dados .= "<tr><td>$id_ticket</td><td>$nome_departamento</td><td>$nome_usuario</td><td>$titulo_ticket</td><td>$desc_ticket</td><td>$data_ticket</td><td>$hora_ticket</td><td>$status</td></tr>";
}

// Fechar a tabela
$dados .="</table>";

$dados .= "</body></html>";

// Rederenciar o nameSpace Dompdf
use Dompdf\Dompdf;

// Instaciar e usar a classe dompdf
$dompdf = new Dompdf();

// Instanciar o metodo  loadHtml e enviar o conteudo do PDF
$dompdf->loadHtml($dados);

// Configurara o tamanho e a orientação do papel 
// landscape - imprimir no formato paisagem 
// $dompdf->setPaper('A4', 'landscape');
// portrait - imprimir no formato retrato 

$dompdf->setPaper('A4', 'portrait');

// Redenrizar o HTML como PDF
$dompdf->render();

$dompdf->stream();

?>