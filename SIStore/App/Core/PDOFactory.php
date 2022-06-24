<?php

namespace App\Core;

use PDO;

class PDOFactory {

    private $con ;

    function __construct() {
        $host = HOST;
        $db = DB;
        $usuario = USUARIO;
        $senha = SENHA;

        $this->con =  new PDO("mysql:host=$host;dbname=$db",$usuario,$senha);

    }

    public function getConexao() {
        return $this->con;
    }

    public function terminarConexao(){
        if(isset($this->con)){
           $this->con = null;
        }
    }
}