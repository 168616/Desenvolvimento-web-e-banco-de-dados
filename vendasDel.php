<?php
    include_once("conexão.php");
    $conexao= conectaBD();

    $numero = filter_input(INPUT_GET, "var_numero");
    $dados = "DELETE FROM venda WHERE numero = {$numero}";

    mysqli_query($conexao, $dados) or die(mysqli_erro());

    echo "Excluido com Sucesso!";

    mysqli_close($conexao);
    
    ?>