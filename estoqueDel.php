<?php
    include_once("conexão.php");
    $conexao= conectaBD();

    $cod = filter_input(INPUT_GET, "var_cod");
    $dados = "DELETE FROM estoque WHERE cod = {$cod}";

    mysqli_query($conexao, $dados) or die(mysqli_erro());

    echo "Excluido com Sucesso!";

    mysqli_close($conexao);
    
    ?>