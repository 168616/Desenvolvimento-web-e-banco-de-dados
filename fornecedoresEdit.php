<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_ID");
      $get2 = filter_input(INPUT_GET, "var_nome");
      $get3 = filter_input(INPUT_GET, "var_tipoProd");
   ?>

   <b><font color="#0000FF">Tela de Edição de Fornecedores</font></b>
      </br> </br>

    <form action="fornecedoresUpd.php" method="post">

     <input type=hidden name=tabela value="fornecedor">

     <b> ID:</b> <input type="text" name="input_ID" size="8" value="<?php echo $get1?>" readonly>
       </br></br>

    <b> Nome:</b> <input type="text" name="input_nome" size="30" value="<?php echo $get2?>">
       </br></br>

    <b> Tipo de Produto: </b> <input type="text" name="input_tipoProd" size="15" value="<?php echo $get3?>">
       </br></br>

    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
