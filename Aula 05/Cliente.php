<?php

class Cliente {
    //atributos
    private int $id ;
    private string $nome ;
    private string $telefone;
    private string $email;
    private date $dataCadastro;
     
    //metodos
    // Construtor

    // Construtor com valores pre-estabelecidos vazios
    function __construct($pId, $pNome, $pEmail, $pTelefone){
        $this-> id = $pId;
        $this -> nome = $pNome;
        $this -> email = $pEmail;
        $this -> telefone = $pTelefone;
        // $this -> dataCadastro = "";
        echo "criei um objeto da classe \n".__CLASS__;
    }

    // function Cliente(int $pId, string $pNome, string $pEmail,string $pTelefone, string $pDataCadastro){
    //     $this-> id = $pId;
    //     $this -> nome = $pNome;
    //     $this -> email = $pEmail;
    //     $this -> telefone = $pTelefone;
    //     $this -> dataCadastro = $pCadastro;
    // }

    //destruir objetos dessa classe
    function __destruct(){
        echo "Finalizando e destruindo o objeto da classe ".__CLASS__;
    }

    // Gets
    function GetId(){
        return $this -> id;
    }
    //Sets
    function SetId(int $pId){
        $this->id = $pId;
    }
    function GetNome(){
        return $this -> nome;
    }
    function SetNome(string $pNome){
        $this->nome = $pNome;
    }
    function GetTelefone(){
        return $this -> telefone;
    }
    function SetTelefone(string $pTelefone){
        $this -> telefone = $pTelefone;
    }
    function GetEmail(){
        return $this -> email;
    }
    function SetEmail(string $pEmail){
        $this -> email = $pEmail;
    }
    function GetDataCadastro(){
        return $this -> dataCadastro;
    }
}
// Criando primeiro objeto da class usando a palavra reservada NEW
$cliente1 = new Cliente(767,"eu","3399","eu@gmail");

$cliente1->SetId(756);
$cliente1->SetNome ("eu");
$cliente1->SetTelefone ("3399");
$cliente1->SetEmail ("eu@gmail");
echo "o primeiro cliente tem o ID: " .$cliente1->GetId();


//chamada para a funcao toString
echo $cliente;

//destruir objeto
unset($cliente1);

// Herança a partir da classe
class ClienteOficina extends Cliente{
    
}
$clienteOficina = new ClienteOficina(231,"eu","3399","blablabla");

echo $ClienteOficina;