<?php 

namespace App\Models;

use App\Core\BaseController;
use App\Core\PDOFactory;
use PDO;
use PDOException;


class ClienteDAO extends BaseController{

    public function buscarClientes(): array{
        $clientes = null;

        try{
            $pdo = new PDOFactory();
            $con = $pdo->getConexao();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $con->query("SELECT * FROM clientes");

            $clientes = $query->fetchAll(PDO::FETCH_ASSOC);

            return $clientes;
        } catch(PDOException $e){
            $e->getMessage();
        }
    }
    
}

