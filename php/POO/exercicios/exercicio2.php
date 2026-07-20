<?php 
//exercicio de cadastrar podruto através do POO e criação de class

class Produto
{
    public string $nome_produto ='';
    public string $descricao = '';
    public int $codigo;
    public int $preco;

    public function setNomeProduto(string $nome_produto): void{
        $this ->nome_produto= $nome_produto;
    }
    public function getNomeProoduto(): string {
        return $this->nome_produto;
    }
    public function setDescricao( string $descricao):void{
        $this->descricao = $descricao;
    }
    public function getDescricao(): string{
        return $this->descricao;
    }
    public function setCodigo(int $codigo): void{
        $this ->codigo = $codigo;
    }
    public function getCodigo(): int{
        return $this->codigo;
    }
    public function setPreco(int $preco): void{
        $this ->preco =$preco;
    }
    public function getPreco(): int {
        return $this->preco;
    }

    public function __construct(string $nome_produto, string $descricao, int $codigo, int $preco){
        $this->nome_produto = $nome_produto;
        $this->descricao = $descricao;
        $this->codigo = $codigo;
        $this->preco = $preco;
    }

}


$produto1 = new Produto(
nome_produto:'mesa',
descricao:'uma mesa de jantar e almoço, muito grande com 4 lugares',
codigo: 54541654878558,
preco: 555.60

);
$produto2= new Produto(
nome_produto:'cadeira gamer',
descricao:'uma cadeira gamer de altissima qualidade e durabilidade, muito grande ',
codigo: 54545742369558,
preco: 2555.60

);
$produto3= new Produto(
    nome_produto:'pc gamer',
    descricao:'pc completo e montado',
    codigo:568235811,
    preco:880.36
);
var_dump($produto1, $produto2, $produto3);