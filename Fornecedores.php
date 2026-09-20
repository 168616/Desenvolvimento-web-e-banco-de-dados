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
    <style>
        h1 {
            color: #14475f;
        }
        table {
            margin-top: 20px;
            
        }
        th,td {
            padding: 10px 20px;
            text-align: left;
        }

        th {
            background-color: #14475f;
            color: white;
            width: 25%;
        }
        td:nth-child(odd) {
            background-color: white;
        }
        td:nth-child(even) {
            background-color: #d2e4ff;
}
    </style>
</head>
<body>
    <h1>Fornecedores</h1>
    <h4><a href="index.html">Home</a></h4>
    <br><br>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Tipo</th>

        </tr>
<?php

            $sql = "SELECT * FROM `fornecedor`";
            $resultado = mysqli_query($conexao, $sql);

            while ($i = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $i['ID']; ?></td>
                    <td><?php echo $i['nome']; ?></td>
                    <td><?php echo $i['tipoProd']; ?></td>
                
                    <td><a href="<?php echo "fornecedoresEdit.php?var_ID=". $i['ID'] ."&var_nome=". $i['nome'] ."&var_tipoProd=". $i['tipoProd']; ?>">Alterar</a></td>
                    <td><a href="<?php echo "fornecedoresDel.php?var_ID=". $i['ID']?>">Excluir</a></td>
                </tr>
                <?php
            }
?>
    </table>
        <h4><a href="fornecedorInsert.html">Cadastrar Novo Fornecedor</a></h4>

    <?php
    mysqli_close($conexao);
    ?>

</body>
</html>