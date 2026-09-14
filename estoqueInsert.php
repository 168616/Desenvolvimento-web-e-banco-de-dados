<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $codigo    = $_POST["cod"];
    $nome      = $_POST["idFornecedor"];
    $valor     = $_POST["val"];
    $perecivel = $_POST["valor"];
    $perecivel = $_POST["quant"];
      
    $sql= "INSERT INTO estoque(cod, idFornecedor, val, valor, quant) 
           VALUES ({$codigo},'{$idFornecedor}',{$val}, {$valor},'{ $quant}')";
    mysqli_query($conexao,$sql) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

    mysqli_close($conexao);

    ?>