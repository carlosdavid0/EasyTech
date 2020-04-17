<html lang="pt-br">
<head>
    <?php 
    include'../banco.php';
    session_start();
    if(($_SESSION['login'] == '') && ($_SESSION['senha'] == '')){
        header("Location:../index.php?logout=ok");
    } 
    
    ?>
<title>Assistência Técnica </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../_css/index.css">
</head>
<body>

<div class="header">
  <h1>Assistência Técnica </h1>
</div>
<center>
       <div>
<ul>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn" style="font-size: 25px;">Cadastro</a>
    <div class="dropdown-content">
        <a href="#">Clientes</a>
        <a href="#">Ordem de serviço </a>
        <a href="#">Fornecedor </a>
    </div>
  </li>
    <li><a href="#" style="font-size: 25px;">Consulta</a></li>
  <li><a href="#" style="font-size: 25px;"> Protocolos </a></li>
</ul>
    </div>
    <div class="main">
        <a  style="float: right; font-size: 25px; text-decoration: none; color: blue; padding-right: 8px; "href="../_server/logout.php"> Logout </a> 
 </br>
 <h1> Bem vindo <?php echo $_SESSION['login'] ;?>            
           
    </div
</center>    
</body>
</html>