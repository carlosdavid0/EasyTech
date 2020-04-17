<?php

session_start();
include '../../banco.php';
$cliente = $_POST['cliente'];
$problema = $_POST['problema'];
$tecnico = $_SESSION['login'];
$consulta = "SELECT * FROM usuario where user ='$tecnico' ";
$con = $conexao->query($consulta) or die($mysqli->error);

$dado = $con->fetch_array();
$nome_tecnico = $dado['nome_usuario'];

$sql = "INSERT INTO `os` (`id_os`, `nome_cliente`, `problema`, `status`,`responsavel` ) VALUES (NULL, '$cliente', '$problema', 'Aberto', '$nome_tecnico')";

if ($conexao->query($sql) === TRUE) {
    header("Location:../os.php?cadastro=ok");
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
