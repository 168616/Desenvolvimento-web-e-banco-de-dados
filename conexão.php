<?php
Function conectaBD() {
    $Servername = "localhost";
    $Username = "root";
    $database = "mercado";
    $Password = "";

    $conexao = mysqli_connect($Servername, $Username, $Password, $database);

    if (!$conexao) {
        die("Conexão Falhou" . mysqli_connect_error());
            }

    return $conexao;
}

Function desconectaBD($conexao) {
    mysqli_close($conexao);
}
?>