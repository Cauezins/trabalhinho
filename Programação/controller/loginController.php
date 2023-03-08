<?php

    include '../Class/configdb.php';
    include '../Class/acoesdb.php';
    
    $conexao = Database::conect();

    $acoes = new AcoesDatabase($conexao);
    
    $dados = $acoes->userExist($_POST['email']);
    
    if (!empty($dados) && $dados['usuario'] == $_POST['email']) {
        if ($dados['senha'] == md5($_POST['senha'])) {
            echo 'entrou';
        } else{
            echo 'senha errada';
        }
    }else{
        echo 'Email não existe';
    }

?>