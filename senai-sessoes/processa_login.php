<?php

session_start();

require("./funcoes.php");

$usuario = $_POST["txt_usuario"];
$senha = $_POST["txt_senha"];

realizarLogin($usuario, $senha, lerArquivo("./dados/usuarios.json"));

?>