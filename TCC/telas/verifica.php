<?php
require_once('../conexao/connect.php');

session_start();

$usuario = $_POST['user'];
$senha = $_POST['pass'];

if (isset($usuario) && isset($senha));
    $sql_codigo = "SELECT * FROM usuarios WHERE nick = '$usuario' AND senha = '$senha' ";

    $sql_query = $mysqli->query($sql_codigo);

    $quantidade_linhas = $sql_query->num_rows;

    if ($quantidade_linhas == 1){
        $resultado = $sql_query->fetch_assoc();
        $_SESSION['id'] = $resultado['Id'];
        header('Location: menu.php');
    }else{
        header('Location: login.php?error');
    }
?>