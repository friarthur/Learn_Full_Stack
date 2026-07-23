<?php 
$arquivo = __DIR__ . '/../json/produtos.json';

$json = file_get_contents($arquivo);
$produtos = json_decode($json, true);

$novoProduto=[
    'nome' => $_POST['nome'],
    'preco ' => $_POST['preco']
];
$produtos[]=$novoProduto;
$json = json_encode($produtos, JSON_PRETTY_PRINT);
file_put_contents($arquivo, $json);

header("Location: ../public/index.php");
