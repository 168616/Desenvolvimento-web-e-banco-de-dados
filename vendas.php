<?php
include 'conexão.php';
$conexao = conectaBD();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
</head>
<body>
    <h1>Vendas</h1>
    <h4><a href="index.html">Home</a></h4>
    <br><br>
    <table>
        <tr>
            <th>Numero</th>
            <th>Vendedor</th>
            <th>Cliente</th>
            <th>Produto</th>
        </tr>
<?php

            $sql = "SELECT * FROM `venda`";
            $resultado = mysqli_query($conexao, $sql);

            while ($tabela = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $tabela['numero']; ?></td>
                    <td><?php echo $tabela['idVendedor']; ?></td>
                    <td><?php echo $tabela['idCliente']; ?></td>
                    <td><?php echo $tabela['idProduto']; ?></td>
                </tr>
                <?php
            }
?>
    </table>

</body>
</html>