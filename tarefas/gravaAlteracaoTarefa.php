<?php
$txtConteudo = filter_input_array(INPUT_POST,FILTER_DEFAULT);
if (isset($txtConteudo["cTitulo"])){
    $id = $txtConteudo["id"];
    $titulo = $txtConteudo["cTitulo"];
    $descricao = $txtConteudo["cDescricao"];
    $data = $txtConteudo["cData"];
    $status = $txtConteudo["cStatus"];
}else{
    echo "Não foi alterado!";
    echo "<meta http-equiv='refresh'content='2;url=alteraTarefa.php'/>";
    return;
}
include "conecta.php";
echo "id".$id;
$sql = "UPDATE task SET ";
$sql = $sql." title ='".$titulo."',description ='".$descricao."', date_task ='".$data."',";
$sql = $sql." situation ='".$status."'";
$sql = $sql." WHERE id ='".$id."'";
echo $sql;
$rs = mysqli_query($conexao,$sql);
if (!$rs){
    echo "problemas na conexão!";
    echo "<meta http-equiv='refresh' 
    content='0;url=alteraTarefa.php' />"; 
    return;
}
mysqli_close($conexao);
echo "Alteração realizada!";
echo "<meta http-equiv='refresh' 
        content='0;url=consultaTarefa.php' />"; 
?>