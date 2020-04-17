<?php
include("banco.php"); // caminho do seu arquivo de conexão ao banco de dados
$consulta = "SELECT * FROM cliente";
$con= $conexao->query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>
</head>
<style>
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<body>
  <table>
    <tr>
      <td>Código</td>
      <td>Nome</td> 
      <td>Ação</td>
    </tr>
    <?php while($dado = $con->fetch_array()) { ?>
    <tr>
      <td><?php echo $dado['id_cliente']; ?></td>
      <td><?php echo $dado['nome_cliente']; ?></td>
     
      <td>
        <a href="usu_editar.php?codigo=<?php echo $dado['id_usuario']; ?>">Editar</a>
        <a href="usu_excluir.php?codigo=<?php echo $dado['id_usuario']; ?>">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
