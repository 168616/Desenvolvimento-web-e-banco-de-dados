<?php
include_once("conexão.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Acesse este arquivo pelo formulário de cadastro.");
}

$conexao = conectaBD();

$codigo = trim($_POST["cod"] ?? "");
$idFornecedor = trim($_POST["idFornecedor"] ?? "");
$val = trim($_POST["val"] ?? "");
$valor = trim($_POST["valor"] ?? "");
$quant = trim($_POST["quant"] ?? "");
$nome = trim($_POST["nome"] ?? "");


$codigo = mysqli_real_escape_string($conexao, $codigo);
$idFornecedor = mysqli_real_escape_string($conexao, $idFornecedor);
$val = mysqli_real_escape_string($conexao, $val);
$valor = str_replace(",", ".", $valor);
$quant = intval($quant);
$nome = mysqli_real_escape_string($conexao, $nome);

$sql = "INSERT INTO estoque(cod, idFornecedor, val, valor, quant, nome) 
        VALUES ('{$codigo}', '{$idFornecedor}', '{$val}', {$valor}, {$quant}, '{$nome}')";

mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

echo "Cadastro com Sucesso!";

mysqli_close($conexao);
?>