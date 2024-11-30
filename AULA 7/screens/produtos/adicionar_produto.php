<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
</head>
<body>
    <main>
        <h1> Cadastrar Produto</h1>
        <form action="../../db/criar_produto.php" method="post">
            <div>
                <label for="nome">nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="marca">marca</label>
                <input type="text" name="marca" id="marca" required>
            </div>
            <div>
                <label for="tamanho">tamanho</label>
                <input type="text" name="tamanho" id="tamanho" required>
            </div>
            <div>
                <label for="preço">preço</label>
                <input type="text" name="preço" id="preço" required>
            </div>
            <div>
                <label for="cidade">quantidade</label>
                <input type="text" name="quantidade" id="quantidade" required>
            </div>
            <div>
                <button type="submit">Cadastrar</button>
                <a href="produtos_painel.php">Voltar</button>
            </div>
        </form>  
    </main>

</body>
</html>
