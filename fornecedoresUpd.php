<?php
    include_once("conexão.php");
    $conexao= conectaBD();

   $var_ID    = $_POST["input_ID"];
   $var_nome     = $_POST["input_nome"];
   $var_tipoProd     = $_POST["input_tipoProd"];

   $SQL = "UPDATE fornecedor
              SET    ID      = '$var_ID',
                     nome = '$var_nome',
                     tipoProd = '$var_tipoProd'
              WHERE  ID = {$var_ID};";

   mysqli_query($conexao, $SQL) or die(mysqli_error());

echo "Cadastro com Sucesso!";

   mysqli_close($conexao);
?>

