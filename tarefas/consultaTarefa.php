
<?php
include "conecta.php";

$sql = "SELECT * FROM task";
$rs = mysqli_query($conexao,$sql);
$total_registros = mysqli_num_rows($rs);
?>
<html>
<head><title> Consulta Tarefa </title>
<script language ="Javascript">
    function confirmacao(id,titulo){
        var resposta = confirm("Deseja remover "+titulo+"?");
        if (resposta == true){
            window.location.href ="excluiTarefa.php?id="+id;
        }
    }
    </script>
</head>
<body>
    <h1>Tarefas</h1>
    <table border=1>
    <thead>
        <th>Titulo</th>
        <th>Descricao</th>
        <th>Data vencimento</th>
        <th>Status</th>
        <th>Ações</th>
    </thead>
<?php
    while ($reg = mysqli_fetch_array($rs)){
        $id = $reg["id"];
        $titulo = $reg["title"];
        $descricao = $reg["description"];
        $data = $reg["date_task"];
        $status = $reg["situation"];
   // }?>
    <tr>
        <td><?php print $titulo; ?></td>
        <td><?php print $descricao; ?></td>
        <td><?php print $data; ?></td>
        <td><?php print $status; ?></td>
        <td> <a href="alteraTarefa.php?id=<?php print $id; ?>">
             <img src="alterar.png" alt="altera" width="4%" height="4%"></a> 
            <a href="javascript:func()" onclick="confirmacao(
            '<?php print $id; ?>','<?php print $titulo; ?>')">
            <img src="excluir.png" alt="exclui"width="4%" height="4%"></a>
        </td>
    </tr>
    <?php   }   ?>
    </table>
    <br><br>
    <a href="index.php"><img src="voltar.gif" alt="" width=10% heigth=10%></a>
</body>
</html>