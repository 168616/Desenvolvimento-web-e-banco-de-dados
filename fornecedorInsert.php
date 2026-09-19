<?php
include_once("conexão.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Acesse este arquivo pelo formulário de cadastro.");
}

$conexao = conectaBD();

$ID = trim($_POST["ID"] ?? "");
$nome = trim($_POST["nome"] ?? "");
$tipoProd = trim($_POST["tipoProd"] ?? "");

$ID = mysqli_real_escape_string($conexao, $ID);
$nome = mysqli_real_escape_string($conexao, $nome);
$tipoProd = mysqli_real_escape_string($conexao, $tipoProd);

$sql = "INSERT INTO fornecedor(ID, nome, tipoProd) 
        VALUES ('{$ID}', '{$nome}', '{$tipoProd}')";

mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

echo "Cadastro com Sucesso!";

mysqli_close($conexao);
?>
