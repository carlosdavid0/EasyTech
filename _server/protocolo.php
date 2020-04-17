<html lang="pt-br">
    <head>
        <?php
        include'../banco.php';
        session_start();
        if (($_SESSION['login'] == '') && ($_SESSION['senha'] == '')) {
            header("Location:../index.php?logout=ok");
        }
        ?>
        
        <?php 
        
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
        table {
            border-collapse: collapse;
            width: 70%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            height: 50px;
            vertical-align: bottom;
        }
        td#problema{
            height: 70%;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
       
        
        
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
            <a style="float: right; font-size: 25px; text-decoration: none; color: blue; padding-right: 8px; "href="logout.php"> Logout </a> 
            </br>
            <h1> Protocolos </h1>
            <?php
            error_reporting(0);
            $consulta = "SELECT * FROM os where status = 'aberto' and responsavel = '$nome_tecnico'";
            $infor = $conexao->query($consulta) or die($mysqli->error);
            while ($dados = $infor->fetch_array()) {
                $aberto = $aberto + 1;
            }
            if ($aberto == 0) {
                ?>
                <h3 style="color: green;"> Ordem em Aberto    <?php echo $aberto ?></h3>
            <?php } else {
                ?>
                <h3 style="color: red;"> Ordem em Aberto    <?php echo $aberto ?></h3>
                <?php
            }
            $consulta = "SELECT * FROM os where status = 'aberto' and responsavel = '$nome_tecnico'";
            $con = $conexao->query($consulta) or die($mysqli->error);
            ?>
            <table>
                <tr>
                    <td>N° Ordem </td>
                    <td>Cliente</td> 
                    <td  id="problema ">Problema</td>
                    <td>Status</td>
<!--                    <td>Opções</td>-->
                </tr>
                <?php while ($dado = $con->fetch_array()) { ?>
                    <tr>
                        <td><?php echo $dado['id_os']; ?></td>
                        <td><?php echo $dado['nome_cliente']; ?></td>
                        <td><?php echo $dado['problema']; ?></td>
                        <td><?php echo $dado['status']; ?></td>

<!--                        <td>
                            <a href="editar/os.php?codigo=<?php echo $dado['id_os']; ?>">Editar</a>
                            <a href="usu_excluir.php?codigo=<?php echo $dado['id_os']; ?>">Excluir</a>
                        </td>-->
                    </tr>
                <?php } ?>

        </div
    </center>    
</body>
</html>