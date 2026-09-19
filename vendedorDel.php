<?php
    include_once("conexão.php");
    $conexao= conectaBD();

    $matricula = filter_input(INPUT_GET, "var_matricula");
    $dados = "DELETE FROM vendedor WHERE matricula = {$matricula}";

    mysqli_query($conexao, $dados) or die(mysqli_erro());

    echo "Excluido com Sucesso!";

    mysqli_close($conexao);
    
    ?>