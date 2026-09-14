<?php
include 'conexão.php';
$conexao = conectaBD();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <h4><a href="index.html">Home</a></h4>
    <br><br>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>
<?php

            $sql = "SELECT * FROM `cliente`";
            $resultado = mysqli_query($conexao, $sql);

            while ($tabela = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $tabela['Codigo']; ?></td>
                    <td><?php echo $tabela['Nome']; ?></td>
                </tr>
                <?php
            }
?>
    </table>

</body>
</html>