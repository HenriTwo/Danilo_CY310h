<?php 
include_once("../conexao/connect.php");

if(isset($_FILES['imagem'])){
    $sql_codigo = "SELECT id FROM usuario ";
    $id = $sql_codigo;
    $imagem = $_FILES['imagem'];

    $pasta = "imagens/";
    $nome_imagem = $imagem['name'];
    $extensao = strtolower(pathinfo($nome_imagem,PATHINFO_EXTENSION));

    if($extensao != "jpg" &&  $extensao != "png")
    echo("Tipo de arquivo negado");
    else $funcionou = move_uploaded_file($imagem["tmp_name"], $pasta . $nome_imagem . "." . $extensao);
    if($funcionou === TRUE){
        $mysqli="INSERT INTO imagem (id_usuario) VALUES ('$id')";
        echo'<p>Arquivo enviado, para ver <a href="menu.php">Clique aqui</a></p>';
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
    <main>
        <h1> ESCOLHA SUA IMAGEM PARA UPAR</h1>
        <form enctype="multipart/form-data" action="" method="post">
            <div>
                <input type="file" name="imagem" id="imagem" required>
            </div>
            <div>
                <button type="submit">Upar Imagem</button>
                <a href="menu.php">Voltar</button>
            </div>
        </form>  
    </main>

</body>
</html>
