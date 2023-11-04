<?php

// carregar Composer
require './vendor/autoload.php';

// Informações para o PDF
$dados = "<!DOCTYPE html>";
$dados .= "<html lang = 'pt-br'>";
$dados .= "<head>";
$dados .= "<meta charset = 'UTF-8'>";
$dados .= "<style>";
$dados .= "table {border-collapse: collapse; width: 100%;}";
$dados .= "th, td {border: 1px solid black; padding: 8px; text-align: left;}";
$dados .= "</style>";
$dados .= "</head>";
$dados .= "<body>";
$dados .= "<h1>Departamentos</h1>";

// Incluir conexao com banco de dados
include_once './config.php';

// Query para recuperar os registros do banco de dados
$query_usuarios = "SELECT id_departamento, nome_departamento FROM departamento";

// Preparar a QUERY
$result_usuarios = $conn->prepare($query_usuarios);

// Executar a QUERY
$result_usuarios->execute();

// Vincular as colunas do resultado às variáveis
mysqli_stmt_bind_result($result_usuarios, $id_departamento, $nome_departamento);

// Iniciar a tabela
$dados .= "<table>";
$dados .= "<tr><th>ID do Departamento</th><th>Nome do Departamento</th></tr>";

// Ler os registros retornados do BD
while(mysqli_stmt_fetch($result_usuarios)){
    $dados .= "<tr><td>$id_departamento</td><td>$nome_departamento</td></tr>";
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