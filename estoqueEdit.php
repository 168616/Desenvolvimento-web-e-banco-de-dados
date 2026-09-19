<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_cod");
      $get2 = filter_input(INPUT_GET, "var_idFornecedor");
      $get3 = filter_input(INPUT_GET, "var_nome");
      $get4 = filter_input(INPUT_GET, "var_valor");
      $get5 = filter_input(INPUT_GET, "var_quant");
   ?>

   <b><font color="#0000FF">Tela de Edição de PRODUTOS</font></b>
      </br> </br>

    <form action="estoqueUpd.php" method="post">

     <input type=hidden name=tabela value="estoque">

     <b> Código:</b> <input type="text" name="input_cod" size="8" value="<?php echo $get1?>" readonly>
       </br></br>

    <b> Nome:</b> <input type="text" name="input_nome" size="30" value="<?php echo $get3?>">
       </br></br>

    <b> Identificação do Fornecedor: </b> <input type="text" name="input_idFornecedor" size="15" value="<?php echo $get2?>">
       </br></br>

    <b> Valor:</b> <input type="text" name="input_valor" size="15" value="<?php echo $get4?>">
         </br></br>

    <b> Quantidade:</b> <input type="text" name="input_quant" size="15" value="<?php echo $get5?>">
       </br></br>   

    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
