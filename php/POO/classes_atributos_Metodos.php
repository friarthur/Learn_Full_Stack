<?php 

class Pessoa{ //sempre começe com letra maiúscula 

public $nome;
public $idade;

public function Falar(){
    echo  "Olá, " . $this->nome ;

//echo 'falou';
    
}

}

$rodrigo  = new Pessoa(); //virou um objeto 
$rodrigo ->nome = "arthur Reis Mendes";
$rodrigo ->idade = 25;
$rodrigo -> Falar(); 
//var_dump($rodrigo);


//segunda função 
class Carro {
    public $marca;
    public $ano;
    public $nome;
    public $tipo;
public function Carro(){
    // modern constructor
    echo 'Então este carro ' . $this->nome . ' pertence a marca ' . $this->marca . " fabricado no ano de " . $this->ano . ' na versão ' . $this->tipo ;
}
}

$carro = new Carro();
$carro -> marca = "toyota";
$carro -> ano = 2007;
$carro -> nome = "prisma";
$carro-> tipo  = "sedan";
$carro -> Carro();

var_dump($carro);


class Familia{
    public $mae;
    public $pai;
    public $filho;
    public $pet;

    public function Familia(){
        echo 'Minha familia é composta por ' . $this->mae . $this->pai . $this-> filho . $this->pet;
    }
}
$JANT = new Familia();
$JANT->mae ='Julia';
$JANT->filho = 'Natan';
$JANT->pet = 'Teresa';
$JANT -> pai = "Arthur";
$JANT -> Familia();
var_dump($JANT);

//php 8.4

class Animal{
        public string $nome;
        public string $tipo;
        public string $funcao;
    public function __construct($nome, $tipo, $funcao){
     $this->nome =$nome;
     $this->tipo =$tipo;
     $this->funcao =$funcao;
      echo 'esse animal é ' . $this->nome . 'ele ' . $this->tipo . 'e a função dele é ' . $this->funcao;  
    }
       
}
$animal = new Animal(
    nome: 'arara',
    tipo: 'ave',
    funcao: 'voar'
);
var_dump($animal);