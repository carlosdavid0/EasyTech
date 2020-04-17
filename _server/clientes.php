<html lang="pt-br">
<head>
    <?php 
    include'../banco.php';
    session_start();
    if(($_SESSION['login'] == '') && ($_SESSION['senha'] == '')){
        header("Location:../index.php?logout=ok");
    } 
    
    ?>
 <style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;
width: 70%;}


.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>    
<title>Login - Assistencia Técnica </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../_css/index.css">
</head>
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
 <a  style="float: right; font-size: 25px; text-decoration: none; color: blue; padding-right: 8px; "href="logout.php"> Logout </a> 
 </br>
 <h1> Cadastro de Clientes</h1>
 <?php 
 $url = $_SERVER["REQUEST_URI"];
 if($url == '/EasyTech/_server/clientes.php?cadastro=ok'){
 
 ?>
<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Concluido!</strong> Cadastro efetuado com sucesso
</div>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
 <?php } ?>
<form  action="cadastros/cad_cliente.php" method="post" style="height: auto;">
         <label for="nome"> Nome: </label><br>
         <input type="text" name="nome" id="nome" placeholder="Nome" required size="40"><br>
         <label for="cpf"> CPF: </label><br>
         <input type="text" name="cpf" id="cpf" placeholder="CPF" required size="40" ><br>
         <label for="telefone"> Telefone: </label><br>
         <input type="text" name="telefone" id="telefone" placeholder="telefone" required size="40" ><br>
         <label for="email"> E-mail: </label><br>
         <input type="email" name="email" id="email" placeholder="E-mail" required size="40" ><br>
         <label for="endereço"> Endereço: </label><br>
         <input type="text" name="endereco" id="endereço" placeholder="Endereço" required size="40" ><br>
         <br>
          <label for="usuario"> Usuário: </label><br>
         <input type="text" name="usuario" id="usuario" placeholder="Usuário" required size="40" ><br>
         <label for="senha"> Senha: </label><br>
         <input type="password" name="senha" id="senha" placeholder="Senha" required size="40" ><br>
         <input type="submit"> 	
  </form>
           
    </div
</center>    
</body>
</html>