<html lang="pt-br">
<head>
<title>Login - Assistencia Técnica </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="_css/index.css">
    <style>
        #text {display:none;color:red}
    </style>
</head>
<body>

<div class="header">
  <h1>Assistencia Técnica </h1>
</div>
<center>
    
    <div class="main">
        <h2> Área de Login </h2>
        <form method="post" action="validar.php">
            <select id="tipo" name="tipo" required="">
<option value="" disabled selected>Você é: </option>
  <option value="Cliente" name=" cliente" >Cliente </option>
  <option value="funcionario" name="funcionario ">Funcionário </option>
  </select>
            </br>
  <label for="login">Usuário:</label>
    <input type="text" id="nome" name="login" required="" >
  </br>
  <label for="senha"> Senha: &nbsp;</label>
    <input type="password" id="senha" name="senha" >
    <p id="alerta"> CAPS LOCK ATIVO</p>
  </br>
    <input type="submit" value="Enviar" id="botao">
</form>
    </div>
    <script>
var input = document.getElementById("senha");
var text = document.getElementById("alerta");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
});
</script>
</center>    
</body>
</html>