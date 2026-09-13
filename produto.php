<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <h4><a href="index.html">Home</a></h4>
    <br><br>

    <?php
    include 'conexão.php';

    $conexao = conectaBD();
    $sql = "SELECT * FROM estoque";
    $resultado = mysqli_query($conexao, $sql);
    ?>

    <table>
        <tr>
            <th>Código</th>
            <th>Fornecedor</th>
            <th>Nome</th>
            <th>Validade</th>
            <th>Valor</th>
            <th>Quantidade</th>
        </tr>

        <?php if ($resultado) : ?>
            <?php while ($tabela = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                    <td><?php echo $tabela['codigo']; ?></td>
                    <td><?php echo $tabela['idFornecedor']; ?></td>
                    <td><?php echo $tabela['nome']; ?></td>
                    <td><?php echo $tabela['val']; ?></td>
                    <td><?php echo $tabela['valor']; ?></td>
                    <td><?php echo $tabela['quantidade']; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">Erro ao consultar produtos.</td>
            </tr>
        <?php endif; ?>
    </table>

    <?php
    desconectaBD($conexao);
    ?>
</body>
</html>