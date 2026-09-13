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
            <th>Fornecedor</th>
            <th>Nome</th>
            <th>Validade</th>
            <th>Valor</th>
            <th>Quantidade</th>
        </tr>
<?php

            $sql = "SELECT * FROM `estoque`";
            $resultado = mysqli_query($conexao, $sql);

            while($tabela = mysqli_fetch_assoc($resultado)){
       
             <tr>
                <td><?php echo $tabela['codigo'];?></td>
                <td><?php echo $tabela['idFornecedor'];?></td>
                <td><?php echo $tabela['nome'];?></td>
                <td><?php echo $tabela['val'];?></td>
                <td><?php echo $tabela['valor'];?></td>
                <td><?php echo $tabela['quantidade'];?></td>
             </tr> }
?>
    </table>

</body>
</html>