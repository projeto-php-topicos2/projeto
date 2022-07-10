<?php 

namespace App\Models;

use App\Core\BaseController;
use App\Core\PDOFactory;
use PDO;
use PDOException;


class ProdutoDAO extends BaseController{

    public function buscarProdutos(): array{
        $produtos = null;

        try{
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $con->query("SELECT * FROM produtos");

            $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

            return $produtos;
        } catch(PDOException $e){
            $e->getMessage();
        }
    }
    
}

