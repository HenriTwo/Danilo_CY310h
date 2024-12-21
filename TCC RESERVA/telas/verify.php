<?php
    include('../conexao/conex.php');

    $nome = $_POST['pesquisa'];

    $sql_codigo = "SELECT nome, marca, quantidade FROM produtos WHERE '$nome' = nome OR '$nome' = marca ";

    $sql_query = $mysqli ->query($sql_codigo);

    if ($sql_query->num_rows >= 1){
        $infos = $sql_query->fetch_all();  
        session_start();
        $_SESSION['itens'] = $infos;
        header('location: menu.php?ok');
    }
    else {
        header('location: menu.php?vazio');
    }
    ?>