<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$arquivo = __DIR__ . '/../json/produtos.json';

$jsonDados = file_get_contents($arquivo);
$produtos = json_decode($jsonDados, true);

$produtos

?>
<!DOCTYPE html>
<html lang="pt-br">
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
        
<?php if (!empty($produtos)): ?>

    <?php foreach ($produtos as $produto): ?>

        <div class="card">
            <h3>Produto</h3>

            <p><?= htmlspecialchars($produto['nome']) ?></p>

            <p>R$ <?= htmlspecialchars($produto['preco']) ?></p>

            <button>Alterar</button>

            <button>Excluir</button>
        </div>

    <?php endforeach; ?>

<?php else: ?>

    <p>Nenhum dado encontrado.</p>

<?php endif; ?>
</body>
</html>