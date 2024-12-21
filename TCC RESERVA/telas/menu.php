<?php
    session_start();

    if(isset($_GET['ok'])){
        $itens = $_SESSION['itens'];
    }
    else {
        $itens =[];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <div>
            <h1>Estoque de Produtos</h1>
        </div>
        <div>
            <form  action="verify.php" method="POST" class="container-input">
                <input type="text" name="pesquisa" id="pesquisa">
                <button type="submit">🔎</button>
            </form>
            <div class="principal">
                <tr>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Quantidade</th>
                </tr>
            </div>
            <table>
                <?php if (!empty($itens)): ?>
                    <?php foreach ($itens as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item[0]); ?></td>
                            <td><?php echo htmlspecialchars($item[1]); ?></td>
                            <td><?php echo htmlspecialchars($item[2]); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>Nenhum Item encontrado.</td>
                    </tr>
                <?php endif; ?> 
            </table>
            <a type="submit" href="add_produto.php" class="btn-add">Adicionar item</button>
        </div>
    </main>
</body>
</html>