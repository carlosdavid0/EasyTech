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
<style>
/* Chat containers */
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
  height: 10%;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container img {
  float: left;
  max-width: auto;
  width: 5%;
  margin-right: 20px;
  border-radius: 15%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}
</style>
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
<div class="container">
  <img src="/w3images/bandmember.jpg" alt="Avatar">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="/w3images/bandmember.jpg" alt="Avatar">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>            
           
    </div
</center>    
</body>
</html>


