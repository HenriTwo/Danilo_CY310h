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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <h1>Top Vendas</h1>
        <form  action="verify.php" method="POST" class="container-input">
            <input type="text" name="pesquisa" id="pesquisa">
            <button type="submit">🔎</button>
        </form>
        <table>
            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Quantidade</th>
            </tr>
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
                    <td colspar="4" style="text-align:cemter;">Nenhum Item encontrado.</td>
                </tr>
            <?php endif; ?> 
        </table>
        <a type="submit" href="add_produto.php">Adicionar item</button>
    </main>
</body>
</html>