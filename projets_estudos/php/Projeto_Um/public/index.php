<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compras </title>
    <link rel="stylesheet" href="/projets_estudos/php/Projeto_Um/public/css/style.css">
</head>
<body>
    <form action="/projets_estudos/php/Projeto_Um/controllers/salva_itens.php" method="post">
        
        <input type="text" name="nome" placeholder="Escreva algum item">
       
        <input type="number" name="preco" placeholder="Preço Do Item">
        <button type="submit">Cadastrar</button>
        </form>

        <h1>lista</h1>
        <?php foreach($produtos as $produto): ?>

<div>
    <h3>Produto</h3>

    <p><?= $produto['nome']; ?></p>

    <p>R$ <?= $produto['preco']; ?></p>

    <button>Alterar</button>

    <button>Excluir</button>
</div>

<?php endforeach; ?>
</body>
</html>