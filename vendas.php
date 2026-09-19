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
    <table border="1">
        <tr>
            <th>Numero</th>
            <th>Vendedor</th>
            <th>Produto</th>
        </tr>
<?php

            $sql = "SELECT * FROM `venda`";
            $resultado = mysqli_query($conexao, $sql);

            while ($i = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $i['numero']; ?></td>
                    <td><?php echo $i['idVendedor']; ?></td>
                    <td><?php echo $i['idProduto']; ?></td>

                    <td><a href="<?php echo "vendasEdit.php?var_numero=". $i['numero'] ."&var_idVendedor=". $i['idVendedor']."&var_idProduto=". $i['idProduto']; ?>">Alterar</a></td>
                    <td><a href="<?php echo "vendasDel.php?var_numero=". $i['numero']?>">Excluir</a></td>
               
                </tr>
                <?php
            }
?>
    </table>
    <h4><a href="vendasInsert.html">Cadastrar Nova Venda</a></h4>


</body>
</html>