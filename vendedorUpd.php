<?php
    include_once("conexão.php");
    $conexao= conectaBD();

   $var_matricula    = $_POST["input_matricula"];
   $var_nome     = $_POST["input_nome"];
   $var_salario     = $_POST["input_salario"];

   $SQL = "UPDATE vendedor
              SET    matricula      = '$var_matricula',
                     nome = '$var_nome',
                     salario = '$var_salario'
              WHERE  matricula = {$var_matricula};";

   mysqli_query($conexao, $SQL) or die(mysqli_error());

echo "Cadastro com Sucesso!";

   mysqli_close($conexao);
?>

