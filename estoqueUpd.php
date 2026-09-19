<?php
    include_once("conexão.php");
    $conexao= conectaBD();

   $var_cod    = $_POST["input_cod"];
   $var_idFornecedor = $_POST["input_idFornecedor"];
   $var_nome     = $_POST["input_nome"];
   $var_valor     = $_POST["input_valor"];
   $var_quant     = $_POST["input_quant"];

   $SQL = "UPDATE estoque
              SET    cod      = '$var_cod',
                     idFornecedor = $var_idFornecedor,
                     nome = '$var_nome',
                     valor = '$var_valor',
                     quant = '$var_quant'
              WHERE  cod = {$var_cod};";

   mysqli_query($conexao, $SQL) or die(mysqli_error());

echo "Cadastro com Sucesso!";

   mysqli_close($conexao);
?>


 