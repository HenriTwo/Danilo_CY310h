<?php 
include('../../conexoes/conexao_sistema.php');
session_start();
$id = $_SESSION['id'];

$sql_codigo = "SELECT * FROM itens WHERE Id='$id' ";
$sql_codigo_usuario = "SELECT Nome FROM cliente WHERE id='$id' ";

$resultado_nome = $mysqli->query($sql_codigo_usuario);
$nome_usuario = $resultado_nome->fetch_assoc();
$nome = $nome_usuario['Nome'];

$resultado = $mysqli->query($sql_codigo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plok plok</title>
</head>
<body>
    <h1>
        Wishlist - <?php echo $nome; ?>
    </h1>
    <main class="container">
        <table>
            <tr class="cabecalho">
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php
                if ($resultado->num_rows >= 1){
                    While($item = $resultado->fetch_assoc()){
                        echo '<tr class="infos">';
                            echo '<td>'.$item['Nome'].'</td>';
                            echo '<td>'.$item['Quantidade'].'</td>';
                            echo '<td><a href="editar.php?id='.$item['Id'].'">editar</a></td>';
                            echo '<td><a href="deletar.php?id='.$item['Id'].'">deletar</a></td>';
                    echo '</tr>';   
                    }               
                }
            ?>
            <tr>
                <td class="add" colspan="4">
                    <?php
                        echo '<a type="submit" class="botao_add" href="adicionar.php">Adicionar</a>';
                    ?>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>