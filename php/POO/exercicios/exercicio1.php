<?php 

class Pessoa
{
public string $nome ='';
public string $email ='';
public int $cpf;

public function setNome(string $nome): void{
    $this -> nome = $nome;
}
public function getNome(): string{
    return $this->nome;
}
public function setEmail(string $email):void{
    $this->email = $email;
}
public function getemail():string{
    return $this->email;
}
public function setCpf(int $cpf) :void{
    $this->cpf= $cpf;
}
public function getCpf():int{
    return $this->cpf;
}

public function __construct(string $nome, string $email, int $cpf)
{
  $this->nome= $nome;
  $this->email= $email;
  $this->cpf= $cpf;
}
// public function Registrar(){
//     echo 'essa é a nova pessoa registrada: ' .$nome . $email . $cpf;
// }

}

$pessoaFisica = new Pessoa(
    nome: 'arthur',
    email: 'arthur@teste.com',
    cpf: 1234567898
);
$pessoaFisica ->setNome('Arthur');
$pessoaFisica -> setEmail('arthur@teste.com');
$pessoaFisica->setCpf(12345678911);

var_dump($pessoaFisica );