<?php
    require_once '../../connection/conn.php';

    $sql_codigo = 'SELECT * FROM produtos';
    $resultado = $mysqli->query($sql_codigo);

    if ($resultado->num_rows > 0){
        $infos = $resultado->fetch_all();
    } else{
        $infos = [ ];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <main>
        <h1>
            Produtos
        </h1>
        <table>

            <tr>
                <th> id </th>
                <th> nome </th>
                <th> marca</th>
                <th> tamanho </th>
                <th> preço </th>
                <th> quantidade </th>
                <th> Ações </th>
            </tr>
            <?php
            if (count($infos) == 0){
                echo '<tr>
                        <td colwspan="4">Nenhum registrado</td>
                    </tr>';
            }else {
                foreach($infos as $item){
                    $id = $item[0];
                    $nome = $item[1];
                    $marca = $item[2];
                    $tamanho = $item[3];
                    $preço = $item[4];
                    $quantidade = $item[5];
                    echo '<tr>
                            <td>'. $id .'</td>
                            <td>'. $nome .'</td>
                            <td>'. $marca .'</td>
                            <td>'. $tamanho .'</td>
                            <td>'. $preço .'</td>
                            <td>'. $quantidade .'</td>
                            <td><a href="formulario_produto.php?id='. $id .'">Editar</a> | <a href="../../db/deletar_produto.php?id='. $id .'">Deletar</a> </td>
                         </tr>';
                }
            }

            ?>
            <tr>
                <td colspan="4"><a href="adicionar_produto.php">+ </a></td>
            </tr>
        </table>
    </main>
</body>
</html>