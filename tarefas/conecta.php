<?php
//realiza conexão com o mysql
$conexao = mysqli_connect("localhost","root","");
//identifica a base de dados
$bancodedados = "newtask";
//conecta mysql e a base de dados
$bd = mysqli_select_db($conexao,$bancodedados);
if (mysqli_connect_errno()){
  printf("Falha na conexão: %s \n",mysqli_connect_errno());
  die();
}
?>