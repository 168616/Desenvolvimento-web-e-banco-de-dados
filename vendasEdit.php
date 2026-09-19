<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_numero");
      $get2 = filter_input(INPUT_GET, "var_idVendedor");
      $get3 = filter_input(INPUT_GET, "var_idProduto");
   ?>

   <b><font color="#0000FF">Tela de Edição de Vendas</font></b>
      </br> </br>

    <form action="vendasUpd.php" method="post">

     <input type=hidden name=tabela value="venda">

     <b> Número:</b> <input type="text" name="input_numero" size="8" value="<?php echo $get1?>" readonly>
       </br></br>

    <b> Id do Vendedor:</b> <input type="text" name="input_idVendedor" size="30" value="<?php echo $get2?>">
       </br></br>
       
    <b> Id do Produto: </b> <input type="text" name="input_idProduto" size="15" value="<?php echo $get3?>">
       </br></br>

    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
