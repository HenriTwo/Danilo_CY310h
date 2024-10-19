<?php
include_once('../../conexoes/conexao_sistema.php');

session_start();

$usuario = $_POST['user'];
$senha = $_POST['pass'];

if (isset($usuario) && isset($senha));
    $sql_codigo = "SELECT * FROM cliente WHERE Usuário = '$usuario' AND Senha = '$senha' ";

    $sql_query = $mysqli->query($sql_codigo);

    $quantidade_linhas = $sql_query->num_rows;

    if ($quantidade_linhas == 1){
        $resultado = $sql_query->fetch_assoc();
        $_SESSION['id'] = $resultado['Id'];
        header('Location: painel.php');
    }else{
        header('Location: login.php?error');
    }
?>