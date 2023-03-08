<?php

    include '../Class/configdb.php';
    include '../Class/acoesdb.php';
    
    $conexao = Database::conect();

    $acoes = new AcoesDatabase($conexao);
    
    if (empty($acoes->userExist($_POST['email']))) {
        $acoes->insertUser($_POST['email'], $_POST['senha']);
    }

    echo 'Esqueceu a senha? <a href="#">troque a</a>';

?>