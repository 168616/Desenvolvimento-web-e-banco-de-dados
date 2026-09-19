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
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Fornecedor</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Quantidade</th>
        </tr>
<?php

            $sql = "SELECT * FROM `estoque`";
            $resultado = mysqli_query($conexao, $sql);

            while ($i = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $i['cod']; ?></td>
                    <td><?php echo $i['idFornecedor']; ?></td>
                    <td><?php echo $i['nome']; ?></td>
                    <td><?php echo $i['valor']; ?></td>
                    <td><?php echo $i['quant']; ?></td>

                    <td><a href="<?php echo "estoqueEdit.php?var_cod=". $i['cod'] ."&var_idFornecedor=". $i['idFornecedor'] ."&var_nome=". $i['nome'] ."&var_valor=". $i['valor'] ."&var_quant=". $i['quant']; ?>">Alterar</a></td>
                    <td><a href="<?php echo "estoqueDel.php?var_cod=". $i['cod']?>">Excluir</a></td>
                </tr>
                <?php
            }
?>
    </table>
    <h4><a href="estoqueInsert.html">Cadastrar Novo Produto</a></h4>

    <?php
    mysqli_close($conexao);
    ?>
</body>
</html>