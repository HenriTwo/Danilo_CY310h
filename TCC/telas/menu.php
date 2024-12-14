<?php 
include('../conexao/connect.php');
session_start();
$id = $_SESSION['id'];

$sql_codigo = "SELECT * FROM imagem WHERE id_usuario='$id' ";

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
        Sua Galeria
    </h1>
    <main class="container">
        <table>
            <tr class="cabecalho">
                <th>nome</th>
            </tr>
            <?php
                if ($resultado->num_rows >= 1){
                    While($item = $resultado->fetch_assoc()){
                        echo '<tr class="infos">';
                            echo '<td><a href="deletar.php?id='.$item['Id'].'">deletar</a></td>';
                    echo '</tr>';   
                    }               
                }
            ?>
            <tr>
                <td class="add" colspan="4">
                    <?php
                        echo '<a type="submit" class="botao_add" href="add_imagem.php">add imagem</a>';
                    ?>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>