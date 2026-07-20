<?php 

class Login{

    private $email;
    private $senha;
    
    public function getEmail(){
    return $this->email;
    }
    public function setEmail($email){
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $this->email = $email;
    }
    public function getSenha(){
    return $this->senha;
    }
    public function setSenha($s){
    $this->senha = $s;
    }
    public function Logar(){
        if($this->email == 'arthur@teste.com' and $this->senha == '123'):
            echo 'logando com sucesso';
        else:
            echo 'dados invalidos';
        endif;
    }

};
$logar = new Login();
$logar-> setEmail('arthur@teste.com');
$logar->setSenha('123');
$logar -> Logar();

//php 8.x


// class Login
// {
//     private string $email = '';
//     private string $senha = '';

//     public function setEmail(string $email): void
//     {
//         $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
//     }

//     public function getEmail(): string
//     {
//         return $this->email;
//     }

//     public function setSenha(string $senha): void
//     {
//         $this->senha = $senha;
//     }

//     public function getSenha(): string
//     {
//         return $this->senha;
//     }

//     public function logar(): bool
//     {
//         return $this->email === 'arthur@teste.com'
//             && $this->senha === '123';
//     }
// }

// $login = new Login();

// $login->setEmail('arthur@teste.com');
// $login->setSenha('123');

// if ($login->logar()) {
//     echo 'Logado com sucesso';
// } else {
//     echo 'Dados inválidos';
// }


class Pessoa{
private string $nome = "";
private string $cidade = "";
private int $idade; 


public function getNome() :string{
    return $this->nome;
} 
public function setNome(string $nome): void{
    $this->nome = $nome;
}
public function setIdade(int $idade): void{
 $this->idade = $idade;
}
public function getIdade() :int{
    return $this->idade;
}
public function setCidade(string $cidade): void{
    $this->cidade = $cidade;
} 
public function getCidade(): string{
    return $this ->cidade;
} 
public function Falar():void{
   echo 'esta pessoa se chama  {$this->nome} tem a idade de {$this->idade} e mora na cidade  {$this->cidade}';
}

}
$pessoa = new Pessoa();

$pessoa->setNome("Arthur");
$pessoa->setIdade(25);
$pessoa->setCidade("RJ");

$pessoa->falar();

var_dump($pessoa);

$pessoa ->Falar();
var_dump($pessoa);


class Biblioteca{
    private string $cliente_alugou;
    private string $nome_livro;
    private int $numeroLivro;
    private int $data_devolucao;

    public function setClientealugou(string $cliente_alugou): void{
        $this->cliente_alugou =$cliente_alugou;
    }
    public function getClientealugou(): string{
        return $this->cliente_alugou;
    }
    public function setNomelivro(string $nome_livro): void{
        $this->nome_livro = $nome_livro;
    }
    public function getNomelivro(): string{
        return $this->nome_livro;
    }
    public function setNumerolivro(int $numeroLivro): void{
      $this->numeroLivro = $numeroLivro;
    }
    public function getNumerolivro():int{
        return $this->numeroLivro;
    }
    public function setDatadevolucao(int $data_devolucao): void{
        $this->data_devolucao = $data_devolucao;
    }
    public function getDatadevolucao():int{
        return $this->data_devolucao;
    }

    public function __construct($cliente_alugou , $nome_livro, $numeroLivro, $data_devolucao){
        $this->cliente_alugou = $cliente_alugou;
        $this->nome_livro = $nome_livro;
        $this->numeroLivro = $numeroLivro;
        $this->data_devolucao = $data_devolucao;
    }
}
$biblioteca = new Biblioteca('', '', '','');
$biblioteca ->setCliente_alugou('arthur');
$biblioteca ->setNomeLivro('Harry POtter');
$biblioteca ->setNumerolivro(1554692);
$biblioteca ->setDatadevolucao(10042001);

