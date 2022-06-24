<?php

namespace App\Controllers;

use App\Core\BaseController;

class Home extends BaseController
{

    public function index()
    {
        // instanciar o model
        // $this->model método herdado de BaseController

       /* 
        $artigoModel = $this->model("Produtos");

        $artigos = $artigoModel->read()->fetchAll(\PDO::FETCH_ASSOC);

        $data = ['artigos' => $artigos];

        $this->view('home/index', $data);

        */
        
        require_once 'App/Views/home.php';

    }
}
