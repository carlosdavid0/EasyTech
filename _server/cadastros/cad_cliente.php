<?php
include '../../banco.php';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];





$sql = "INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `cpf`, `telefone`, `endereco`, `user`, `senha`, `email`) VALUES (NULL, '$nome', '$cpf', '$telefone', '$endereco', '$usuario', '$senha', '$email')";


if ($conexao ->query($sql) === TRUE) {
    header("Location:../clientes.php?cadastro=ok");
    
    
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}



//$query =  "INSERT INTO cliente (id_cliente, nome_cliente, cpf , telefone, endereço , user , senha ) values ('' , '$nome', '$cpf','$telefone', '$endereco , '$usuario ','$senha')";
// mysqli_query($conexao, $query);
// header("Location:../clientes.php?cadastro=ok");