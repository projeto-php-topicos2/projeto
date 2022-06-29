<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Core\PDOFactory;

class Home extends BaseController
{
    
/*
    function __construct()
    {
        session_start();
        if (!(isset($_SESSION['id']) && isset($_SESSION['nome']))) :
            header("Location:".URL_BASE."/");
        endif;
    }
*/
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
        
        require_once 'App/Views/indexVendedor.php';

    }


    public function cadastrarCliente(){
        
        /* CONTINUAR DAQUI*/

        $nome = $_POST['nomeCliente'];
        $

        $pdo = new PDOFactory();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $con = $pdo->getConexao();

        
 

  $stmt = $con->prepare
  $stmt->execute(array(
    ':nome' => 'Ricardo Arrigoni'
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();

        $_POST['']

    }
}
