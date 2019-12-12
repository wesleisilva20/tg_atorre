<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("localhost", "root", "");
 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "tg_testes");
 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM setor") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);

?>