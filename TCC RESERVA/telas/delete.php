<?php 
    include('../conexao/conex.php');

    $id = $_GET['id'];
    $sql_codigo = "DELETE FROM produtos WHERE id='$id' ";

    if($mysqli -> query($sql_codigo) == TRUE){
        header("location: menu.php");
    }
    else {
        echo 'Não funcionou' . $mysqli->error;
    }