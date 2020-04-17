<?php
  
  //variáveis de conexão com o banco de dados
  $hostname = "localhost";
  $user = "root";
  $password = "";
  $database = "tcc_2020";
  
  $conexao = new mysqli($hostname,$user,$password,$database);
  
  if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
  echo mysqli_connect_error();

?>