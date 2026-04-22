<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
</head>
<body>
   <h1>Cadastrar tarefa</h1> 
   <form action="gravaTarefa.php" method='post'>
    Titulo: <input type="text" name=cTitulo><br><br>
    Descrição: <input type="text" name=cDescricao><br><br>
    Data: <input type="date" name=cData><br><br>
    Status:<SELECT name = "cStatus"> 
    <OPTION SELECT VALUE ="Pendente">Pendente
    <OPTION SELECT VALUE ="Em Andamento">Em Andamento
    <OPTION SELECT VALUE ="Concluida">Concluida
    </SELECT><br>
    <input type="submit" value="Enviar" name="b1">
   </form>
   
</body>
</html>