<?php

    session_start();

    require_once("./funcoes.php");

    verificarLogin();

    //recebendo os dados json - 1a forma
    // $dados = lerArquivo("dados/usuarios.json");
    // var_dump($dados);
    // exit;
    // realizarLogin("maria", "654321", $dados);
    

    // realizarLogin("cristiano", "123456", lerArquivo("dados/usuarios.json"));

    //verificando os dados de variáveis de sessão
    // echo 'Nome usuário: ' . $_SESSION["usuario"] . "<br />";
    // echo 'ID sessão: ' . $_SESSION["id"] . "<br />";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Área restrita</title>
</head>
<body>
    
    <h1>ÁREA RESTRITA</h1>
    
    <div class='toolbar'>

        <h2>
            <?php echo 'Olá ' . strtoupper($_SESSION['usuario']) . ' - Login efetutado em: ' .$_SESSION['data_hora']; ?>
        </h2>

        <h2>
           <a class="material-icons" href="processa_login.php?logout=true">logout</a>
        </h2>

    </div>

</body>
</html>