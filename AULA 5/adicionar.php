<?php 
    include('../conexoes/conexao_estoque.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];

        $sql_codigo = "INSERT INTO itens (nome, quantidade) VALUES ('$nome' , '$quantidade')";

        if($mysqli -> query($sql_codigo) == TRUE){
            header("location: index.php");
        }
        else {
            echo 'Não funcionou' . $mysqli->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
</head>
<body>
    <h1>
        Adicionar Item
    </h1>
    <form action="" method="post">
        <label>Nome</label>
        <input type="text" name="nome" required>
        <label>Quantidade</label>
        <input type="number" name="quantidade" required>

        <input type="submit" value="Salvar">
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>