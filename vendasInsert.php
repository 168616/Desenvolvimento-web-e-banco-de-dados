<?php
include_once("conexão.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Acesse este arquivo pelo formulário de cadastro.");
}

$conexao = conectaBD();

$numero = trim($_POST["numero"] ?? "");
$idVendedor = trim($_POST["idVendedor"] ?? "");
$idProduto = trim($_POST["idProduto"] ?? "");

$numero = mysqli_real_escape_string($conexao, $numero);
$idVendedor = mysqli_real_escape_string($conexao, $idVendedor);
$idProduto = mysqli_real_escape_string($conexao, $idProduto);

$sql = "INSERT INTO venda(numero, idVendedor, idProduto) 
        VALUES ('{$numero}', '{$idVendedor}', {$idProduto})";

mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

echo "Cadastro com Sucesso!";

mysqli_close($conexao);
?>