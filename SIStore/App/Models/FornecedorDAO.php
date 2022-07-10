<?php 

namespace App\Models;

use App\Core\BaseController;
use App\Core\PDOFactory;
use PDO;
use PDOException;


class FornecedorDAO extends BaseController{

    public function buscarFornecedores(): array{
        $fornecedores = null;

        try{
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $con->query("SELECT * FROM fornecedores");

            $fornecedores = $query->fetchAll(PDO::FETCH_ASSOC);

            return $fornecedores;
        } catch(PDOException $e){
            $e->getMessage();
        }
    }
    
}

