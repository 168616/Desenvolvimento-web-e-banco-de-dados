<?php
    include_once("conexão.php");
    $conexao= conectaBD();

   $var_numero    = $_POST["input_numero"];
   $var_idVendedor     = $_POST["input_idVendedor"];
   $var_idProduto     = $_POST["input_idProduto"];

   $SQL = "UPDATE venda
              SET   numero      = '$var_numero',
                    idVendedor = '$var_idVendedor',
                    idProduto = '$var_idProduto'
              WHERE numero = {$var_numero};";

   mysqli_query($conexao, $SQL) or die(mysqli_error());

echo "Cadastro com Sucesso!";

   mysqli_close($conexao);
?>

