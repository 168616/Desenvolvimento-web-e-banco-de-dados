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
    <h1>Vendas</h1>
    <h4><a href="index.html">Home</a></h4>
    <br><br>
    <table border="1">
        <tr>
            <th>Matricula</th>
            <th>Nome</th>
            <th>Salario</th>
        </tr>
<?php

            $sql = "SELECT * FROM `vendedor`";
            $resultado = mysqli_query($conexao, $sql);

            while ($i = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $i['matricula']; ?></td>
                    <td><?php echo $i['nome']; ?></td>
                    <td><?php echo $i['salario']; ?></td>

                      <td><a href="<?php echo "vendedorEdit.php?var_matricula=". $i['matricula'] ."&var_salario=". $i['salario']."&var_nome=". $i['nome']; ?>">Alterar</a></td>
                    <td><a href="<?php echo "vendedorDel.php?var_matricula=". $i['matricula']?>">Excluir</a></td>
                </tr>
                <?php
            }
?>
    </table>
        <h4><a href="vendedorInsert.html">Cadastrar Novo vendedor</a></h4>

</body>
</html>