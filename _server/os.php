<html lang="pt-br">
<head>
    <?php 
    include'../banco.php';
    session_start();
    if(($_SESSION['login'] == '') && ($_SESSION['senha'] == '')){
        header("Location:../index.php?logout=ok");
    } 
    
    ?>
    
   
<title>Login - Assistencia Técnica </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../_css/index.css">
<link rel="stylesheet" href="../_css/server/consulta.css">
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
width:35%;
float: right;}



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
</head>
<body>

<div class="header">
  <h1>Assistencia Técnica </h1>
  </br>
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
     <?php 
    $consulta = "SELECT * FROM cliente";
    $con= $conexao->query($consulta) or die($mysqli->error);
    
    ?>
    <div class="main">
       <a  style="float: right; font-size: 25px; text-decoration: none; color: blue; padding-right: 8px; "href="logout.php"> Logout </a>
          <?php 
 $url = $_SERVER["REQUEST_URI"];
 if($url == '/EasyTech/_server/os.php?cadastro=ok'){
 
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
       </br>
       <h1> Cadastro de Ordem de Serviço  </h1>
     
 <form action="cadastros/cad_os.php" method="post">
         <label for="nome"> Nome: </label><br>
         <select required="" id="cliente" name="cliente"> 
             <option value="" disabled selected>Cliente: </option>
              <?php while($dado = $con->fetch_array()) { ?>
             <option  value="  <?php echo $dado['nome_cliente'];?> "  name="cliente"> <?php echo $dado['nome_cliente']; ?> </option>
              <?php }?>
         </select>
     
         </br>
         <label for="problema"> Descreva o Problema : </label><br>
         <textarea name="problema" style="width: 517px; margin: 0px; height: 170px;"> </textarea>
         </br>
         <input type="submit" value="Cadastrar" style="width: 13% ">
        	
  </form>

</form>   
           
    </div
</center>    
</body>
</html>