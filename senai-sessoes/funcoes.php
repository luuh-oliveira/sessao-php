<?php

function lerArquivo($nomeArquivo){

    $arquivo = file_get_contents($nomeArquivo);

    $arquivoArray = json_decode($arquivo);
    return $arquivoArray;

}

function realizarLogin($usuario, $senha, $dados){
    
    foreach ($dados as $dado) {
        if ($dado->usario == $usuario && $dado->senha == $senha) {
            
            //variáves de sessão
            $_SESSION["usuario"] = $dado->usuario;
            $_SESSION["id"] = session_id();
            $_SESSION["data_hora"] = date("d/m/Y - h:i:s");

            header("location: area_restrita.php");
            exit;

        } else {
           header("location: index.php");
           exit;
        }
        
    }

}

?>