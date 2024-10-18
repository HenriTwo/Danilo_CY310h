<?php
include('../conexoes/conexao_estoque.php');

$sql_codigo = 'SELECT * FROM itens';
$resultado = $mysqli->query($sql_codigo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pada Watson</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
        Pada Watson
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
        </table>
    </main>
</body>
</html>