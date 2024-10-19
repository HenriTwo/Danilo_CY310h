<?php 
    include('../../conexoes/conexao_sistema.php');

    $id = $_GET['id'];
    $sql_codigo = "DELETE FROM itens WHERE id='$id' ";

    if($mysqli -> query($sql_codigo) == TRUE){
        header("location: painel.php");
    }
    else {
        echo 'Não funcionou' . $mysqli->error;
    }