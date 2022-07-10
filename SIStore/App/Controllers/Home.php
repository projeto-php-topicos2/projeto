<?php

namespace App\Controllers;

use App\Core\BaseController;

class Home extends BaseController
{

    public function index()
    {
       
        
        require_once 'App/Views/home.php';

    }

    public function sucessoCadastro(){
        require_once 'App/Views/sucesso.php';
    }

    public function sucessoAlteracao(){
        require_once 'App/Views/alteracao.php';
    }

    public function sucessoCompra(){
        require_once 'App/Views/sucessoCompra.php';
    }
}
