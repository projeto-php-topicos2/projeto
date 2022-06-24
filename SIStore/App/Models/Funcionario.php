<?php

namespace App\Models ;

class Funcionario {
    private $id ;
    private $nome ; 
    private $cpf; 
    private $senha; 
    private $email; 
    private $papel;


    function __construct( $id, $nome, $cpf, $papel){
            
    }


    public function getId(){
        return $this->id;
    }
    
    public function getNome(){

    }

    public function getcpf(){

    }

    public function getSenha(){

    }

    public function getEmail(){

    }

    public function getPapel(){

    }
   

}

