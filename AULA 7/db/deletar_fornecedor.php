<?php

    require_once '../connection/conn.php';

    $sql_codigo = "DELETE FROM fornecedores WHERE id= '$id'";

    if ($mysqli->query($sql_codigo) === TRUE){
        header('location: ../screens/fornecedores/fornecedores_painel.php');
    }

?>