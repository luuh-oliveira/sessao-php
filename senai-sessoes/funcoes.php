<?php

function lerArquivo($nomeArquivo){

    $arquivo = file_get_contents($nomeArquivo);

    $arquivoArray = json_decode($arquivo);
    return $arquivoArray;

}

function realizarLogin($usuario, $senha, $dados){
    
    foreach ($dados as $dado) {
        if ($dado->usuario == $usuario && $dado->senha == $senha) {
            
            //variáves de sessão
            $_SESSION["usuario"] = $dado->usuario;
            $_SESSION["id"] = session_id();
            $_SESSION["data_hora"] = date("d/m/Y - h:i:s");

            header("location: area_restrita.php");
            exit;

        } 
        
    }

    header("location: index.php");

}

function verificarLogin(){

    if(($_SESSION["id"] != session_id()) || (empty($_SESSION["id"]))){
        header("location: index.php");
    }

}

function finalizarLogin()
{
    session_unset(); //limpa todas as variáveis de sessão
    session_destroy();

    header("location: index.php");
}

?>