<?php
session_start();


include 'banco.php';

$funcao = $_POST['tipo'];
$usuario = $_POST['login'];
$senha = $_POST['senha'];


if ($funcao == 'Cliente'){
         $sql = "select * from cliente where user = '$usuario' and senha = '$senha' ";
        $consulta = $conexao->query($sql);

    if ($consulta->num_rows > 0) {
        
       $_SESSION['login'] = $usuario;
       $_SESSION['senha'] = $senha; 
       
        header('location:_cliente/index.php');
    } else {
         unset ($_SESSION['login']);
         unset ($_SESSION['senha']);
        header('location: index.php?login=erro');
    }
    
}else{   $sql = "select * from usuario where user = '$usuario' and senha = '$senha' ";
        $consulta = $conexao->query($sql);

    if ($consulta->num_rows > 0) {
        
       $_SESSION['login'] = $usuario;
       $_SESSION['senha'] = $senha; 
       
        header('location:_server/index.php');
    } else {
         unset ($_SESSION['login']);
         unset ($_SESSION['senha']);
        header('location: index.php?login=erro');
    }
    
    
}
?>