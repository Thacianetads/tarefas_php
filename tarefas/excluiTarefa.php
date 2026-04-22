<?php
$txtConteudo = filter_input_array(INPUT_GET,FILTER_DEFAULT);
if (isset($txtConteudo["id"])){
  $varID = $txtConteudo["id"];
  include "conecta.php";
  $sql = "DELETE FROM task WHERE id=".$varID;
  $rs = mysqli_query($conexao,$sql);
  if ($rs){
    print "Dados excluídos com sucesso!!";
    print "<meta http-equiv='Refresh' content='1;URL=consultaTarefa.php'/>";
  }else{
    print "Exclusão não foi executada!";
  }
  mysqli_close($conexao);
  print "<meta http-equiv='Refresh'content='2;URL=consultaTarefa.php'/>";
}else{
    print "Exclusão não foi executada, verifique!!";
}
?>