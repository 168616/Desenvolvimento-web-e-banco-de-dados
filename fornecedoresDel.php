<?php
    include_once("conexão.php");
    $conexao= conectaBD();

    $ID = filter_input(INPUT_GET, "var_ID");
    $dados = "DELETE FROM fornecedor WHERE ID = {$ID}";

    mysqli_query($conexao, $dados) or die(mysqli_erro());

    echo "Excluido com Sucesso!";

    mysqli_close($conexao);
    
    ?>