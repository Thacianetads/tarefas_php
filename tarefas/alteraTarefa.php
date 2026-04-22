<?php
include "conecta.php";
$txtConteudo = filter_input_array(INPUT_GET,FILTER_DEFAULT);
if (isset($txtConteudo["id"])){
    $var_id = $txtConteudo["id"];
    //comando para buscar os dados do id respectivo
    $sql = "SELECT * FROM task WHERE id=".$var_id;
    $rs = mysqli_query($conexao,$sql);
    $reg = mysqli_fetch_array($rs);
    $id = $reg["id"];
    $titulo = $reg ["title"];
    $descricao = $reg["description"];
    $data = $reg["date_task"];
    $status = $reg["situation"];
}else{
    echo "REGISTRO NÃO LOCALIZADO!";
    echo "<meta HTTP-EQUIV='Refresh' CONTENT='5;URL=consultaTarefa.php'>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Tarefa</title>
</head>
<body>
    <h1>Alteração de Tarefa</h1>
    <form action="gravaAlteracaoTarefa.php" method="post">
    <input type="hidden" name="id" 
        value='<?php print $id; ?>'/>
    Titulo: <input type="text" name="cTitulo"
        value='<?php print $titulo; ?>'/><br><br>
    Descrição: <input type="text" name="cDescricao"
        value='<?php print $descricao; ?>'/><br><br>
    Data vencimento: <input type="text" name="cData"
        value='<?php print $data; ?>'/><br><br>
    Status: 
        <select name="cStatus">
            <option value="Pendente" <?php echo ($status == 'Pendente') ? 'selected' : ''; ?>>Pendente</option>
            <option value="Em Andamento" <?php echo ($status == 'Andamento') ? 'selected' : ''; ?>>Em Andamento</option>
            <option value="Concluida" <?php echo ($status == 'Concluida') ? 'selected' : ''; ?>>Concluida</option>
        </select><br><br>
    
    <input type="submit" value="Enviar" name="b1">
    </form>
    <br><br>
    <a href="index.php"><img src="voltar.gif" alt="" width=10% heigth=10%></a>
</body>
</html>