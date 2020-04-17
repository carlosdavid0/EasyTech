<html lang="pt-br">
<head>
    <?php 
    include'../banco.php';
    session_start();
    if(($_SESSION['login'] == '') && ($_SESSION['senha'] == '')){
        header("Location:../index.php?logout=ok");
    } 
    $tecnico = $_SESSION['login'];
    $consulta = "SELECT * FROM usuario where user ='$tecnico' ";
    $con = $conexao->query($consulta) or die($mysqli->error);
    $dado = $con->fetch_array();
    $nome_tecnico = $dado['nome_usuario'];

    
    ?>
<title>Login - Assistencia Técnica </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../_css/index.css">
</head>
<style>
    li#user{
        float: right;
    }
</style>
<body>

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
 
 </br>
 <h1> Bem vindo <?php echo $nome_tecnico ;?>  
     
 
           
    </div
</center>    
</body>
</html>