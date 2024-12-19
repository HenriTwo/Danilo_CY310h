<?php
    require_once '../connexao/connect.php';

    session_start();
    $id = $_SESSION['id'];

    $sql_codigo = "INSERT INTO imagem (id_usuario) VALUES ('$id')";

    $resultado = $mysqli->query($sql_codigo);

    if ($resultado === TRUE){
        header('location: ../telas/menu.php');
    }
    else{
        header('location: ../telas/menu.php?erro');
    }


?>
