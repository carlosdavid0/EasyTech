<html lang="pt-br">
<head>
    <?php 
    include'../banco.php';
    session_start();
    if(($_SESSION['login'] == '') && ($_SESSION['senha'] == '')){
        header("Location:../index.php?logout=ok");
    } 
    $consulta = "SELECT * FROM cliente ORDER BY nome_cliente ASC";
    $con= $conexao->query($consulta) or die($mysqli->error);
    ?> 
    <?php
error_reporting(0);
?>
<title>Login - Assistencia Técnica </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../_css/index.css">
<link rel="stylesheet" href="../_css/server/consulta.css">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: auto;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

</head>
<body >

<div class="header">
  <h1>Assistencia Técnica </h1>
</div>
<center>
      <div>
<ul>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn" style="font-size: 25px;">Cadastro</a>
    <div class="dropdown-content">
        <a href="clientes.php">Clientes</a>
        <a href="os.php">Ordem de serviço </a>
        <a href="fornecedor.php">Fornecedor </a>
    </div>
  </li>
    <li><a href="consulta.php" style="font-size: 25px;">Consulta</a></li>
  <li><a href="protocolo.php" style="font-size: 25px;"> Protocolos </a></li>
</ul>
    </div>
    <div class="main">
       <a  style="float: right; font-size: 25px; text-decoration: none; color: blue; padding-right: 8px; "href="logout.php"> Logout </a>
       <h1 id="titulo_main"> Consultas de Clientes </h1>
       </br>
       <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:10%;">ID</th>
    <th style="width:60%;">Nome</th>
    <th style="width:60%;">CPF</th>
    <th style="width:80%;">ENDEREÇO </th>
    
  </tr>
  <?php while($dado = $con->fetch_array()) { ?>
  <tr>
    <td><?php echo $dado['id_cliente']; ?></td>
    <td><?php echo $dado['nome_cliente']; ?></td>
    <td><?php echo $dado['cpf']; ?></td>
    <td><?php echo $dado['endereco']; ?></td>
   
  </tr>
  <?php } ?>
</table>
       </br></br></br></br></br></br>
       <script src="../_javascript/pesquisa.js" ></script>  
</div
</center>    
</body>
</html>