<?php
include_once("conexão.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Acesse este arquivo pelo formulário de cadastro.");
}

$conexao = conectaBD();

$matricula = trim($_POST["matricula"] ?? "");
$nome = trim($_POST["nome"] ?? "");
$salario = trim($_POST["salario"] ?? "");

$matricula = mysqli_real_escape_string($conexao, $matricula);
$nome = mysqli_real_escape_string($conexao, $nome);
$salario = str_replace(",", ".", $salario);

$sql = "INSERT INTO vendedor(matricula, nome, salario) 
        VALUES ('{$matricula}', '{$nome}', {$salario})";

mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

echo "Cadastro com Sucesso!";

mysqli_close($conexao);
?>