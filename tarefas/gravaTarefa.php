<?php
$titulo = $_POST['cTitulo'];
$descricao =$_POST['cDescricao'];
$data =$_POST['cData'];
$status = $_POST['cStatus'];

//conecta com a base de dados
include "conecta.php";
//comando para inserir na tabela
$sql = "INSERT INTO task (title, description, date_task, situation) VALUES ";
$sql = $sql."('$titulo','$descricao','$data', '$status')";

//echo $sql;  //mostra o comando na tela
$rs = mysqli_query($conexao,$sql);
if (!$rs){
    echo $sql;
    echo 'Problemas na gravação!!';
    echo '<meta http-equiv="refresh" content="10;URL=index.php"/>';
    return;
}
mysqli_close($conexao);
echo '<br>Gravação executada com sucesso';
echo '<meta http-equiv="refresh" content="2;URL=consultaTarefa.php"/>';
?>